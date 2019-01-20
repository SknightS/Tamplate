<?php

namespace App\Http\Controllers;

use App\Company;
use App\Address;
use App\Hirereport;
use App\Requestjob;
use App\Companybranch;
use App\job;
use App\jobtype;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Session;
use Image;

class EmployerController extends Controller
{

    //

    public function __construct()
    {
        $this->middleware(function ($request, $next) {


            if(Auth::check() && Auth::user()->fkuserTypeId=='empr'){

                return $next($request);

            }else{
                Session::flash('message', 'please Login to Account Again .');
                return redirect()->guest(route('loginshow'));
            }


        });
    }


    public function index()
    {

        return view('employer/employerDashboard');
    }

    public function favoriteEmployee()
    {
        return view('employer/favorite-candidates');
    }

    public function myprofile()
    {
        return view('employer/myprofile');
    }

    public function manageJob()
    {
        $userId=Auth::user()->id;

        $employerInfo = Company::where('fkuserId', $userId)->first();

        return view('employer/manage-job',compact('employerInfo'));
    }


    public function manageApplication()
    {
        return view('employer/manage-application');

    }

    // show employer Dashboard
    public function showProfile()
    {

         $userId=Auth::user()->id;

        $employerInfo = Company::where('fkuserId', $userId)->first();

        if ($employerInfo->address_addressId !=null){

            $employerAddress=Address::select('address.addresscol','master_subarb.name as city','master_state.name as state')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$employerInfo->address_addressId)
                ->get();

        }else{
            $employerAddress=null;

        }

        return view('employer.resume',compact('employerInfo','employerAddress'));


    }

    public function showInforForEdit(Request $r) //show edit modal for employer basic info
    {

        $addressStates = DB::table('master_state')->get();

        if ($r->address !=null){

            $employerAddress=Address::select('address.addresscol','master_subarb.name as city','master_subarb.id as cityId','master_state.name as state','master_state.id as stateId')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$r->address)
                ->get();

        }else{
            $employerAddress=null;

        }

        $employerInfo=array(
            'id'=>$r->id,
            'name'=>$r->name,

            'phone'=>$r->phone,
            'email'=>$r->email,
            'address'=>$r->address,
        );

        $object = (object) $employerInfo;


        return view('employer.editEmployerInformation',['employerInfo' => $object,'states'=>$addressStates,'address'=>$employerAddress])->render();

    }

    public function getAllCityByState(Request $r) // show all cities of selected state
    {

        $addressCities = DB::table('master_subarb')->where('master_state_id',$r->stateId)->get();

        if ($addressCities == null) {
            echo "<option value='' selected>Select City</option>";
        } else {
            echo "<option value='' selected>Select City</option>";
            foreach ($addressCities as $city) {
                echo "<option value='$city->id'>$city->name</option>";
            }
        }


    }

    public function EmployerInfoUpdate($employer,Request $r) // employer info update
    {

        $employerInfo=Company::findOrFail($employer);
        $employerInfo->contact_person_name=$r->name;

        $employerInfo->cp_phone=$r->phone;
        $employerInfo->cp_email=$r->email;

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $employer.'profileImage'.'.'.$img->getClientOriginalExtension();
            $employerInfo->image=$filename;
            $location = public_path('employerImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('employerImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }



        if ($employerInfo->address_addressId != null) {
            $employeeAddress = Address::findOrFail($employerInfo->address_addressId);
        }else{
            $employeeAddress= new Address();
        }
        $employeeAddress->addresscol=$r->address;
        $employeeAddress->master_subarb_id=$r->cities;

        $employeeAddress->save();

        $employerInfo->address_addressId=$employeeAddress->addressId;
        $employerInfo->save();



        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }


    // show employer Company
    public function showMyCompany()
    {

        $userId=Auth::user()->id;

        $employerInfo = Company::where('fkuserId', $userId)->first();


        $employerCompaniesWithBranch= Companybranch::select('company.companyId','company_branch.id as branchId','company_branch.image','company_branch.name as branchName','company_branch.address_addressId',
            'company_branch.phone','company_branch.email','address.addresscol','master_subarb.name as city',
            'master_state.name as state')
            ->leftJoin('company', 'company_branch.company_companyId', '=', 'company.companyId')
            ->leftJoin('address', 'address.addressId', '=', 'company_branch.address_addressId')
            ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
            ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
            ->where('company.fkuserId',$employerInfo->fkuserId)
            ->where('company_branch.branchStatus','!=',STATUS['deleted']['code'])
            ->get();

        //return $employerCompaniesWithBranch;

        return view('employer.companyInfo',compact('employerInfo','employerCompaniesWithBranch'));


    }
    // show employer Company info by id
    public function showMyCompanyInfo(Request $r)
    {

        $companyBranchId=$r->id;

        $addressStates = DB::table('master_state')->get();

        $employerCompaniesWithBranch= Companybranch::select('company.companyId','company_branch.image','company_branch.about','company_branch.branchStatus','company_branch.name as branchName','company_branch.address_addressId',
            'company_branch.phone','company_branch.email','address.addresscol','master_subarb.id as cityId','master_subarb.name as cityName',
            'master_state.id as state')
            ->leftJoin('company', 'company_branch.company_companyId', '=', 'company.companyId')
            ->leftJoin('address', 'address.addressId', '=', 'company_branch.address_addressId')
            ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
            ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
            ->where('company_branch.id',$companyBranchId)
            ->get();
        $activePost=job::where('status',JOB_STATUS['post']['code'])->where('company_branch_id',1)->count('id');


        return view('employer.editCompanyAllInfo',compact('companyBranchId','employerCompaniesWithBranch','addressStates','activePost'));


    }

    public function employerCompanyInfoUpdate($branchId,Request $r) // employer company info update
    {

        $branchInfo=Companybranch::findOrFail($branchId);
        $branchInfo->name=$r->name;
        $branchInfo->phone=$r->phone;
        $branchInfo->email=$r->email;
        $branchInfo->about=$r->about;
        $branchInfo->branchStatus=$r->branchStatus;

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $branchId.'profileImage'.'.'.$img->getClientOriginalExtension();
            $branchInfo->image=$filename;
            $location = public_path('companyImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('companyImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }



        if ($branchInfo->address_addressId != null) {
            $branchAddress = Address::findOrFail($branchInfo->address_addressId);
        }else{
            $branchAddress= new Address();
        }
        $branchAddress->addresscol=$r->address;
        $branchAddress->master_subarb_id=$r->cities;

        $branchAddress->save();

        $branchInfo->address_addressId=$branchAddress->addressId;
        $branchInfo->save();



        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return redirect()->route('employer.companyInfo');

    }
    public function employerCompanyInfoaddNew(Request $r) // employer company info update
    {

        $addressStates = DB::table('master_state')->get();

        return view('employer.addCompanyNewInfo',compact('addressStates'));


    }
    public function saveNewEmployerCompanyInfo(Request $r) // employer company info insert
    {

        $company=Company::where('fkuserId', '=',Auth::user()->id)->first()->companyId;


        $branchAddress= new Address();
        $branchAddress->addresscol=$r->address;
        $branchAddress->master_subarb_id=$r->cities;
        $branchAddress->save();



        $branchInfo=new Companybranch();
        $branchInfo->name=$r->name;
        $branchInfo->phone=$r->phone;
        $branchInfo->email=$r->email;
        $branchInfo->about=$r->about;
        $branchInfo->address_addressId=$branchAddress->addressId;

        $branchInfo->company_companyId=$company;
        $branchInfo->branchStatus=$r->branchStatus;

        $branchInfo->save();

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $branchInfo->id.'profileImage'.'.'.$img->getClientOriginalExtension();
            $branchInfo->image=$filename;
            $location = public_path('companyImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('companyImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }


        Session::flash('success_msg', 'Your Company Added Successfully!');

        return redirect()->route('employer.companyInfo');

    }

    public function deleteEmployerCompany(Request $r) // delete employer Company
    {
        $company=Companybranch::findOrFail($r->id);
        $company->branchStatus=STATUS['deleted']['code'];
        $company->save();


    }

    /*----------------------------- job-------------------------------*/
    public function manageAllJob()
    {
        $userId=Auth::user()->id;

        $employerInfo = Company::where('fkuserId', $userId)->first();
        $employerAllJobs=job::select('job.id as jobId','job.jobName','job.status','job.deadline','job.no_of_vacancy as vacancy','jobtype.typeName as jobType','company_branch.name as companyName')
            ->leftJoin('jobtype', 'jobtype.id', '=', 'job.fkjobTypeId')
            ->leftJoin('company_branch', 'company_branch.id', '=', 'job.company_branch_id')
            ->where('job.status','!=',JOB_STATUS['delete']['code'])
            ->where('company_branch.company_companyId','=',$employerInfo->companyId)
            ->get();

        return view('employer/manage-All-Job',compact('employerInfo','employerAllJobs'));
    }
    public function jobDelete(Request $r)
    {
        $job=Job::findOrFail($r->id);
        $job->status=JOB_STATUS['delete']['code'];
        $job->save();

        Session::flash('success_msg', 'Job Deleted Successfully!');
        return redirect()->route('employer.manageAllJob');
    }
    public function DeactivatePostedJob(Request $r)
    {
        DB::table('post')->where('fkjobId',$r->id)->delete();

        $job=Job::findOrFail($r->id);
        $job->status=JOB_STATUS['inactive']['code'];
        $job->save();

    }
    public function viewNewJobForm(Request $r)
    {
        $jobType=Jobtype::get();
        $companyId = Company::where('fkuserId', Auth::user()->id)->first()->companyId;
        $companyBrach=Companybranch::select('id','name')
            ->where('company_companyId',$companyId)
            ->where(function($query){
                $query->where('company_branch.branchStatus','!=',STATUS['deleted']['code']);
                $query->Where('company_branch.branchStatus','!=',STATUS['inactive']['code']);
            })
            ->get();
        return view('employer.newJobForm',compact('jobType','companyBrach'));
    }
    public function jobPostForm(Request $r)
    {
        $jobId=$r->id;

        return view('employer.ExistingPostJobForm',compact('jobId'));
    }
    public function viewEditJobForm(Request $r)
    {
        $jobId=$r->id;
        $jobType=Jobtype::get();
        $companyId = Company::where('fkuserId', Auth::user()->id)->first()->companyId;
        $companyBrach=Companybranch::select('id','name')
            ->where('company_companyId',$companyId)
            ->where(function($query){
                $query->where('company_branch.branchStatus','!=',STATUS['deleted']['code']);
                $query->Where('company_branch.branchStatus','!=',STATUS['inactive']['code']);
            })
//            ->where('company_branch.branchStatus','!=',STATUS['deleted']['code'])
            ->get();
        $jobInfo=job::findOrFail($jobId);

        $post=DB::table('post')->where('fkjobId',$jobId)->first();


        return view('employer.editJobForm',compact('jobId','jobType','companyBrach','jobInfo','post'));
    }
    public function saveJobPost(Request $r)
    {
        $post=new Post();
        $post->fkjobId=$r->jobId;
        $post->description=$r->postDescription;
        $post->save();

        $job=Job::findOrFail($r->jobId);
        $job->status=JOB_STATUS['post']['code'];
        $job->save();


        Session::flash('success_msg', 'Job Posted Successfully!');
        return redirect()->route('employer.manageAllJob');

    }
    public function saveNewJob(Request $r)
    {
        $job=new Job();
        $job->jobName=$r->jobName;
        $job->description=$r->description;
        $job->no_of_vacancy=$r->vacancy;
        $job->job_amount=$r->jobAmount;
        $job->fkjobTypeId=$r->jobType;
        $job->company_branch_id=$r->companyId;
        $job->deadline=$r->deadLine;
        $job->status=$r->jobStatus;
        $job->createDate=date('Y-m-d');
        $job->save();



        if ($r->jobStatus==JOB_STATUS['post']['code']){

            $post=new Post();
            $post->fkjobId=$job->id;
            $post->description=$r->postDescription;
            $post->save();

        }

        Session::flash('success_msg', 'Job Added Successfully!');
        return redirect()->route('employer.manageAllJob');

    }
    public function updateJob(Request $r)
    {
        $job=Job::findOrFail($r->jobId);
        $job->jobName=$r->jobName;
        $job->description=$r->description;
        $job->no_of_vacancy=$r->vacancy;
        $job->job_amount=$r->jobAmount;
        $job->fkjobTypeId=$r->jobType;
        $job->company_branch_id=$r->companyId;
        $job->deadline=$r->deadLine;
        $job->status=$r->jobStatus;

        $job->save();


        if ($r->jobStatus==JOB_STATUS['post']['code']){
            if ($r->postId != ""){

                $post=Post::findOrFail($r->postId);

                $post->description=$r->postDescription;
                $post->save();

            }else{

                $post=new Post();
                $post->fkjobId=$job->id;
                $post->description=$r->postDescription;
                $post->save();

            }


        }else{
            if ($r->postId != ""){

                $post=Post::destroy($r->postId);
            }

        }

        Session::flash('success_msg', 'Job Added Successfully!');
        return redirect()->route('employer.manageAllJob');

    }

    /* manage Application */
    public function manageAllApplication(Request $r){

        $userId=Auth::user()->id;

        $employerInfo = Company::where('fkuserId', $userId)->first();
        $companyId = Company::where('fkuserId', $userId)->first()->companyId;

        $allApplication=Requestjob::select('requestjob.requestJobId','requestjob.request_status','candidate.name as candidateName','candidate.image','candidate.email as candidateEmail','job.jobName as jobTitle','jobtype.typeName','company_branch.name as companyName')
            ->leftJoin('candidate', 'candidate.candidateId', '=', 'requestjob.fkcandidateId')
            ->leftJoin('job', 'job.id', '=', 'requestjob.job_id')
            ->leftJoin('jobtype', 'jobtype.id', '=', 'job.fkjobTypeId')
            ->leftJoin('company_branch', 'company_branch.id', '=', 'job.company_branch_id')
            ->leftJoin('company', 'company.companyId', '=', 'company_branch.company_companyId')
            ->where('company_companyId',$companyId);




        $allApplication=$allApplication->paginate(1);



        if ($r->ajax()) {

            return view('employer.manageAllApplicationWithData',compact('allApplication'));
        }


        return view('employer.manageAllApplication',compact('employerInfo'));


    }
    public function manageAllApplicationwithData(Request $r){

        $userId=Auth::user()->id;

//        $employerInfo = Company::where('fkuserId', $userId)->first();
        $companyId = Company::where('fkuserId', $userId)->first()->companyId;

        $allApplication=Requestjob::select('requestjob.requestJobId','requestjob.request_status','candidate.name as candidateName','candidate.image','candidate.email as candidateEmail','job.jobName as jobTitle','jobtype.typeName','company_branch.name as companyName')
            ->leftJoin('candidate', 'candidate.candidateId', '=', 'requestjob.fkcandidateId')
            ->leftJoin('job', 'job.id', '=', 'requestjob.job_id')
            ->leftJoin('jobtype', 'jobtype.id', '=', 'job.fkjobTypeId')
            ->leftJoin('company_branch', 'company_branch.id', '=', 'job.company_branch_id')
            ->leftJoin('company', 'company.companyId', '=', 'company_branch.company_companyId')
            ->where('company_companyId',$companyId);




        $allApplication=$allApplication->paginate(1);


        return view('employer.manageAllApplicationWithData',compact('allApplication'));


    }
    public function manageStartJob(Request $r){

        $job=Requestjob::findOrFail($r->id);

        $job->request_status=JOB_REQUEST_STATUS['inProgress']['code'];
        $job->request_status=JOB_REQUEST_STATUS['inProgress']['code'];

        $job->save();

        $report=DB::table('hirereport')->where('fkrequestJobId',$r->id)->orderBy('hireReportId','desc')->limit(1)->update(['startTime' => now()]);

        Session::flash('success_msg', 'Job Started Successfully!');



    }
    public function manageCompleteJob(Request $r){

        $job=Requestjob::findOrFail($r->id);

        $job->request_status=JOB_REQUEST_STATUS['complete']['code'];

        $job->save();

        $report=DB::table('hirereport')->where('fkrequestJobId',$r->id)->orderBy('hireReportId','desc')->limit(1)->update(['endTime' => now()]);

        Session::flash('success_msg', 'Job Started Successfully!');



    }
    public function manageApproveJob(Request $r){

        $job=Requestjob::findOrFail($r->id);

        $job->request_status=JOB_REQUEST_STATUS['approve']['code'];

        $job->save();

        $report=new Hirereport();
        $report->fkrequestJobId=$r->id;
        $report->save();


        Session::flash('success_msg', 'Job Approved Successfully!');



    }
    public function manageRejectJob(Request $r){

        $job=Requestjob::findOrFail($r->id);

        $job->request_status=JOB_REQUEST_STATUS['reject']['code'];

        $job->save();

        Session::flash('success_msg', 'Job Rejected Successfully!');



    }
}

