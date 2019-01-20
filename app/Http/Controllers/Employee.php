<?php

namespace App\Http\Controllers;

use App\Socialmedia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Candidate;
use App\Address;
use App\Education;
use App\Workexperience;
use App\Skill;
use App\Freetime;
use App\Requestjob;
use App\Job;
use Session;
use Image;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {


            if(Auth::check() && Auth::user()->fkuserTypeId=='emp'){

                return $next($request);

            }else{
                Session::flash('message', 'please Login to Account Again .');
                return redirect()->guest(route('loginshow'));
            }


        });
    }



    public function showResume() // return employee resume with all related info
    {


        $userId=Auth::user()->id;
        $candidateInfo = Candidate::where('fkuserId', $userId)->first();

        if ($candidateInfo->address_addressId !=null){

            $employeeAddress=Address::select('address.addresscol','master_subarb.name as city','master_state.name as state')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$candidateInfo->address_addressId)
                ->get();

        }else{
            $employeeAddress=null;

        }

        $socialLink = Socialmedia::select('socialmedia.id','socialmedia.link','socialmedianame.name')
                            ->leftJoin('socialmedianame', 'socialmedianame.id', '=', 'socialmedia.fkname')
                            ->where('fkCandidateId', $candidateInfo->candidateId)->get();

        $workExperience = Workexperience::where('fkcandidateId', $candidateInfo->candidateId)->get();
        $education = Education::where('fkcandidateId', $candidateInfo->candidateId)->get();

        $skill = Skill::select('skill.id','skill.percentage','master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
            ->where('candidateId', $candidateInfo->candidateId)
            ->get();
        $FreeTimeInfo = Freetime::select('id','day','startTime','endTime')
            ->where('candidateId', $candidateInfo->candidateId)->get();



        return view('employee.resume', compact('candidateInfo','socialLink','employeeAddress','workExperience','education','skill','FreeTimeInfo'));


    }

    public function showInforForEdit(Request $r) //show edit modal for employee basic info
    {

        $addressStates = DB::table('master_state')->get();

        if ($r->address !=null){

            $employeeAddress=Address::select('address.addresscol','master_subarb.name as city','master_subarb.id as cityId','master_state.name as state','master_state.id as stateId')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$r->address)
                ->get();

        }else{
            $employeeAddress=null;

        }

        $candidateInfo=array(
            'id'=>$r->id,
            'name'=>$r->name,
            'professionTitle'=>$r->profession,
            'phone'=>$r->phone,
            'email'=>$r->email,
            'address'=>$r->address,
        );

        $object = (object) $candidateInfo;

//        $CandidateSocialLinks = Socialmedia::select('socialmedia.id','socialmedia.fkname','socialmedia.link','socialmedianame.name')
//            ->leftJoin('socialmedianame', 'socialmedianame.id', '=', 'socialmedia.fkname')
//            ->where('fkCandidateId', $r->id)->get();

//        $allSocialMedia=DB::table('socialmedianame')->get();



        return view('employee.editCandidateInformation',['candidateInfo' => $object,'states'=>$addressStates,'address'=>$employeeAddress])->render();

    }

    public function CandidateInfoUpdate($candidate,Request $r) // employee info update
    {

        $employeeInfo=Candidate::findOrFail($candidate);
        $employeeInfo->name=$r->name;
        $employeeInfo->professionTitle=$r->profession;
        $employeeInfo->phone=$r->phone;
        $employeeInfo->email=$r->email;

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $candidate.'profileImage'.'.'.$img->getClientOriginalExtension();
            $employeeInfo->image=$filename;
            $location = public_path('employeeImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('employeeImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }



        if ($employeeInfo->address_addressId != null) {
            $employeeAddress = Address::findOrFail($employeeInfo->address_addressId);
        }else{
            $employeeAddress= new Address();
        }
        $employeeAddress->addresscol=$r->address;
        $employeeAddress->master_subarb_id=$r->cities;

        $employeeAddress->save();

        $employeeInfo->address_addressId=$employeeAddress->addressId;
        $employeeInfo->save();



        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }

    public function showCandidateAboutMeForEdit(Request $r) // show edit modal of employee about me
    {

        $candidateInfo = Candidate::Select('aboutme')->where('candidateId', $r->id)->get();
        return view('employee.editCandidateAbouteMe',['candidateInfo' => $candidateInfo,'id'=>$r->id]);

    }
    public function CandidateAboutMeUpdate($candidate,Request $r) // employee aboute me update
    {

        $employeeInfo=Candidate::findOrFail($candidate);
        $employeeInfo->aboutme=$r->aboutMe;

        $employeeInfo->save();


        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }
    public function CandidateAddWorkExperience(Request $r) // show add modal of employee WorkExperience
    {


        return view('employee.addCandidateWorkExperience',['id'=>$r->id]);

    }

    public function insertCandidateWorkExperience($candidate,Request $r) // employee work experience insert
    {

        $employeeWorkExperience=new Workexperience();

        $employeeWorkExperience->comapnyName=$r->companyName;
        $employeeWorkExperience->postName=$r->postName;
        $employeeWorkExperience->duration=$r->duration;
        $employeeWorkExperience->description=$r->description;
        $employeeWorkExperience->fkcandidateId=$candidate;

        $employeeWorkExperience->save();

        Session::flash('success_msg', 'Work Experience Added Successfully!');
        return back();

    }

    public function editCandidateWorkExperience(Request $r) // show edit modal of employee work experience
    {

        $workExperienceInfo = Workexperience::findOrFail($r->id);

        return view('employee.editWorkExperience',['experience' => $workExperienceInfo,'id'=>$r->id]);

    }
    public function CandidateWorkExperienceUpdate($experienceId,Request $r) // employee work experience update
    {

        $workExperienceInfo = Workexperience::findOrFail($experienceId);

        $workExperienceInfo->comapnyName=$r->companyName;
        $workExperienceInfo->postName=$r->postName;
        $workExperienceInfo->duration=$r->duration;
        $workExperienceInfo->description=$r->description;


        $workExperienceInfo->save();

        Session::flash('success_msg', 'Work Experience Updated Successfully!');
        return back();

    }

    public function deleteCandidateWorkExperience(Request $r) // employee selected work experience delete
    {

        $employeeWorkExperience=Workexperience::destroy($r->id);

    }

    public function addEducation(Request $r) // show add modal of employee education
    {


        return view('employee.addEducation',['id'=>$r->id]);

    }

    public function insertCandidateEducation($candidate,Request $r) //employee education insert
    {



        $education=new Education();

        $education->schoolName=$r->schoolName;
        $education->degreeName=$r->degreeName;
        $education->startDate=date('Y',strtotime($r->startDate));
        if ($r->currentlyRunning){
            $education->currentlyRunning=$r->currentlyRunning;
        }else{
            $education->endDate=date('Y',strtotime($r->endDate));
        }
        $education->fkcandidateId=$candidate;

        $education->save();

        Session::flash('success_msg', 'Education Added Successfully!');
        return back();

    }

    public function deleteCandidateEducation(Request $r) //employee education delete
    {


        $employeeEducation=Education::destroy($r->id);

    }
    public function editCandidateEducation(Request $r) // show edit modal of employee education
    {

        $educationInfo = Education::findOrFail($r->id);

        return view('employee.editEducation',['education' => $educationInfo,'id'=>$r->id]);

    }

    public function CandidateEducationUpdate($educationId,Request $r) //employee selected education update
    {

        $EducationInfo = Education::findOrFail($educationId);

        $EducationInfo->schoolName=$r->schoolName;
        $EducationInfo->degreeName=$r->degreeName;
        $EducationInfo->startDate=date('Y',strtotime($r->startDate));
        if ($r->currentlyRunning){
            $EducationInfo->currentlyRunning=$r->currentlyRunning;
            $EducationInfo->endDate=null;
        }else{
            $EducationInfo->endDate=date('Y',strtotime($r->endDate));
            $EducationInfo->currentlyRunning='0';
        }

        $EducationInfo->save();

        Session::flash('success_msg', 'Education Updated Successfully!');
        return back();

    }

    public function addSkill(Request $r) // show add modal for employee skill
    {

        $candidateId=$r->id;
        $skills = DB::table('master_skill')->get();

        return view('employee.addSkill',compact('candidateId','skills'));

    }

    public function editCandidateSkill(Request $r) // show edit modal of employee skill
    {

        $skillInfo = Skill::select('skill.percentage','master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
            ->where('skill.id', $r->id)->get();
        $skillId = $r->id;
        $skills = DB::table('master_skill')->get();

        return view('employee.editSkill',compact('skillId','skillInfo','skills'));

    }

    public function deleteCandidateSkill(Request $r) // delete selected skill of employee
    {


        $employeeSkill=Skill::destroy($r->id);

    }

    public function insertCandidateSkill($candidate,Request $r) // insert employee skill
    {


        $skillName=$r->skillName;
        $skillPercenTage=$r->skillPercentage;


        for ($i=0;$i<count($skillName);$i++){

            $skillInfo = DB::table('master_skill')->select('id')->where('skillName', $skillName[$i])->first();
            if (!empty($skillInfo)){

                $skillId=$skillInfo->id;

            }else{
                $skillId=DB::table('master_skill')->insertGetId(
                    ['skillName' => $skillName[$i]]
                );

            }

            $skill=new skill();
            $skill->skillId=$skillId;
            $skill->percentage=$skillPercenTage[$i];

            $skill->candidateId=$candidate;

            $skill->save();

        }

        Session::flash('success_msg', 'Skill Added Successfully!');
        return back();

    }
    public function CandidateSkillUpdate($skillsId,Request $r) //employee selected skill update
    {


        $skillName=$r->skillName;



        $skillInfo = DB::table('master_skill')->select('id')->where('skillName', $skillName)->first();
        if (!empty($skillInfo)){

            $skillId=$skillInfo->id;

        }else{
            $skillId=DB::table('master_skill')->insertGetId(
                ['skillName' => $skillName]
            );

        }

        $skill=Skill::findOrFail($skillsId);
        $skill->skillId=$skillId;
        $skill->percentage=$r->skillPercentage;

        $skill->save();


        Session::flash('success_msg', 'Skill Updated Successfully!');
        return back();

    }




    public function deleteSocialMedia(Request $r) //delete social media
    {

        $media=Socialmedia::destroy($r->id);

    }

    public function showChangepassword() // show change password page
    {
        $userId=Auth::user()->id;
        $candidateInfo = Candidate::where('fkuserId', $userId)->first();
        return view('employee.changepassword',compact('candidateInfo'));
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


    public function addFreeTime(Request $r) //show add modal for employee free time
    {

        $candidateId=$r->id;
        return view('employee.addFreeTime',compact('candidateId'));

    }

    public function editCandidateFreeTime(Request $r) // show edit modal for employee free time
    {

        $FreeTimeInfo = Freetime::select('day','startTime','endTime')
            ->where('id', $r->id)->get();
        $FreeTimeId = $r->id;

        return view('employee.editFreeTime',compact('FreeTimeInfo','FreeTimeId'));

    }

    public function CandidateFreeTimeUpdate($FreeTimeId,Request $r) //employee selected free time update
    {

        $FreeTimeInfo = Freetime::findOrFail($FreeTimeId);

        $FreeTimeInfo->day=$r->dayName;
        $FreeTimeInfo->startTime=date('H:i:s',strtotime($r->startTime));
        $FreeTimeInfo->endTime=date('H:i:s',strtotime($r->endTime));


        $FreeTimeInfo->save();

        Session::flash('success_msg', 'Free Time Updated Successfully!');
        return back();

    }

    public function deleteCandidateFreeTime(Request $r) // delete employee selected free time
    {


        $freeTime=Freetime::destroy($r->id);

    }


    public function insertCandidateFreeTime($candidate,Request $r) // insert employee free time
    {


        $dayName=$r->dayName;
        $startTime=$r->startTime;
        $endTime=$r->endTime;


        for ($i=0;$i<count($dayName);$i++){


            $freeTime=new Freetime();

            $freeTime->day=$dayName[$i];
            $freeTime->startTime=date('H:i:s',strtotime($startTime[$i]));
            $freeTime->endTime=date('H:i:s',strtotime($endTime[$i]));

            $freeTime->candidateId=$candidate;

            $freeTime->save();

        }

        Session::flash('success_msg', 'Free Time Added Successfully!');
        return back();

    }


    public function showJobApplied() // show all aplied job of the employee and related info
    {

        $userId=Auth::user()->id;
        $candidateInfo = Candidate::where('fkuserId', $userId)->first();

//        $candidateAllAppliedJob=Requestjob::select('requestjob.*','post.description','job.jobName')
//            ->leftJoin('post', 'post.id', '=', 'requestjob.post_id')
//            ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
//            ->where('requestjob.fkcandidateId', $candidateInfo->candidateId)
//            ->paginate(1);

        $candidateAllAppliedJob=Requestjob::select('requestjob.*','company_branch.name as companyName','job.jobName',
            'jobtype.typeName as jobType','hirereport.startTime as jobStartTime','hirereport.endTime as jobEndTime',
            'hirereport.start_code as jobStartCode','hirereport.finish_code as jobEndCode')
//            ->leftJoin('post', 'post.id', '=', 'requestjob.post_id')
            ->leftJoin('job', 'job.id', '=', 'requestjob.job_id')
            ->leftJoin('company_branch', 'company_branch.id', '=', 'job.company_branch_id')
            ->leftJoin('jobtype', 'jobtype.id', '=', 'job.fkjobTypeId')
            ->leftJoin('hirereport','hirereport.fkrequestJobId', '=','requestjob.requestJobId')
            ->where('requestjob.fkcandidateId', $candidateInfo->candidateId)
            ->get();

        return view('employee.jobapplied',compact('candidateInfo','candidateAllAppliedJob'));
    }

    public function showAllJob(Request $r) // show all  job that are posted for employee to apply
    {

        $userId=Auth::user()->id;
        $candidateInfo = Candidate::where('fkuserId', $userId)->first();

        $allJobs=Job::select('job.id as jobId','job.jobName','job.no_of_vacancy','job.job_amount','job.deadline','jobtype.typeName',
            'company_branch.name as companyName','post.description','post.id as postId')
            ->leftJoin('company_branch', 'company_branch.id', '=', 'job.company_branch_id')
            ->leftJoin('jobtype', 'jobtype.id', '=', 'job.fkjobTypeId')
            ->leftJoin('post', 'post.fkjobId', '=', 'job.id')
            ->where('post.status',STATUS['active']['code']);

        if($r->search !=""){
            $allJobs=$allJobs->where('job.jobName', 'like', '%' . $r->search . '%');
        }

        $allJobs=$allJobs->paginate(1);

        $applyjob = Requestjob::select('post_id')
            ->where('fkcandidateId' , $candidateInfo->candidateId)
            ->get();

        if ($r->ajax()) {
            return view('employee.showAllJobData',compact('candidateInfo','allJobs','applyjob'));
        }
        
        return view('employee.showAllJob',compact('candidateInfo'));
//        return view('employee.showAllJob',compact('candidateInfo','allJobs','applyjob'));


    }
    public function showAllJobData(Request $r) // show all  job that are posted for employee to apply
    {

        $userId=Auth::user()->id;
        $candidateInfo = Candidate::where('fkuserId', $userId)->first();

        $allJobs=Job::select('job.id as jobId','job.jobName','job.no_of_vacancy','job.job_amount','job.deadline','jobtype.typeName',
            'company_branch.name as companyName','post.description','post.id as postId')
            ->leftJoin('company_branch', 'company_branch.id', '=', 'job.company_branch_id')
            ->leftJoin('jobtype', 'jobtype.id', '=', 'job.fkjobTypeId')
            ->leftJoin('post', 'post.fkjobId', '=', 'job.id')
            ->where('post.status',STATUS['active']['code']);

        if($r->search !=""){
            $allJobs=$allJobs->where('job.jobName', 'like', '%' . $r->search . '%');
        }

        $allJobs=$allJobs->paginate(1);

        $applyjob = Requestjob::select('post_id')
            ->where('fkcandidateId' , $candidateInfo->candidateId)
            ->get();


        return view('employee.showAllJobData',compact('candidateInfo','allJobs','applyjob'));
//        return view('employee.showAllJob',compact('candidateInfo','allJobs','applyjob'));


    }

    public function applyForJob(Request $r) //  employee job Apply
    {
        $candidateInfo = Candidate::where('fkuserId', Auth::user()->id)->first();
        $requestJob=new Requestjob();
        $requestJob->fkcandidateId=$candidateInfo->candidateId;
        $requestJob->applyTime=now();
        $requestJob->request_status=JOB_REQUEST_STATUS['pending']['code'];
        $requestJob->job_id=$r->jobIdforApply;
        $requestJob->save();

        Session::flash('success_msg', 'Job Applied Successfully!');
        return back();



    }

}
