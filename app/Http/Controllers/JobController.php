<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Requestjob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\Jobtype;
use App\Post;

use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $r)
    {
        $jobtype = Jobtype::select('id', 'typeName');

        $filterJobType=$r->typeId;

        if ($filterJobType != null) {
            $jobtype = $jobtype->whereIn('jobtype.id', $filterJobType);
        }
        $jobtype=$jobtype->get();

        $jobfilterType=array();

        if ($filterJobType != null){
            foreach ($jobtype as $type){
                array_push($jobfilterType,$type->id);

            }
        }



        $alljob = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname','company_branch.image as cImage',
            'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id');

            if ($jobfilterType != null){

                $alljob=$alljob->whereIn('job.fkjobTypeId',$jobfilterType);
            }
        $alljob=$alljob->paginate(1);

        $jobpost= Post::select('fkjobTypeId',DB::raw('COUNT(fkjobId) as total_post'))
            ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
            ->groupBy('fkjobTypeId')
            ->get();

        if ($r->ajax()) {

            return view('layouts.jobListeningWithParameter')
                ->with('alljob', $alljob);
        }

        return view('layouts.jobListening')
            ->with('jobcountt', $jobpost)
            ->with('jobtypename',$jobtype)
            ->with('alljob', $alljob);
    }
    public function showAllJobWithPerameter(Request $r)
    {
        $jobtype = Jobtype::select('id', 'typeName');

        $filterJobType=$r->typeId;

        if ($filterJobType != null) {
            $jobtype = $jobtype->whereIn('jobtype.id', $filterJobType);
        }
        $jobtype=$jobtype->get();

        $jobfilterType=array();

        if ($filterJobType != null){
            foreach ($jobtype as $type){
                array_push($jobfilterType,$type->id);

            }
        }

        $alljob = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname','company_branch.image as cImage',
            'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id');

        if ($jobfilterType != null){

            $alljob=$alljob->whereIn('job.fkjobTypeId',$jobfilterType);
        }
        $alljob=$alljob->paginate(1);

        return view('layouts.jobListeningWithParameter')

            ->with('alljob', $alljob);
    }


    public function jobdetails($typename,$postid,Request $r){




        if(Auth::check()){

            if (auth()->user()->fkuserTypeId=='emp'){

                $candidateId=Candidate::where('fkuserId',Auth::user()->id)->first()->candidateId;

                $jobdetails = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname','job.description as jdetails','company_branch.image as cimage ',
                    'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount', 'master_state.name as statename','master_subarb.name as cityname',
                    'requestjob.job_id as requestedJobId','requestjob.fkcandidateId as AppliedcandidateId')
                    ->leftJoin('job','job.id', 'post.fkjobId')
                    ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
                    ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
                    ->leftjoin('address','address.addressId','job.address_addressId')
                    ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
                    ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
                    ->leftjoin('requestjob','requestjob.job_id','job.id')
                    ->where ('post.id', $postid)
//                ->where ('requestjob.fkcandidateId',Auth::user()->id)
                    ->first();

            }else{
                $candidateId=null;
                $jobdetails = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname','job.description as jdetails','company_branch.image as cimage ', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount', 'master_state.name as statename','master_subarb.name as cityname')
                    ->leftJoin('job','job.id', 'post.fkjobId')
                    ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
                    ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
                    ->leftjoin('address','address.addressId','job.address_addressId')
                    ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
                    ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
                    ->where ('post.id', $postid)
                    ->first();

            }



        }else{
            $candidateId=null;
            $jobdetails = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname','job.description as jdetails','company_branch.image as cimage ', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount', 'master_state.name as statename','master_subarb.name as cityname')
                ->leftJoin('job','job.id', 'post.fkjobId')
                ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
                ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
                ->leftjoin('address','address.addressId','job.address_addressId')
                ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
                ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
                ->where ('post.id', $postid)
                ->first();

        }

//        return $jobdetails;


        $similarjob  = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname','company_branch.image as cimage ', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->where('typeName',$typename)
            ->where('post.id','!=',$postid)
            ->paginate(1);

        if ($r->ajax()) {

            return view('layouts.similar-job-details')
                ->with('similarjob', $similarjob);
        }


        return view('layouts.job-details')

            ->with('jobdetails', $jobdetails)
            ->with('similarjob', $similarjob)
            ->with('type', $typename)
            ->with('postId', $postid)
            ->with('candidate', $candidateId);

    }
    public function jobdetailsWithSimilarJobData(Request $r){


        $similarjob  = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->where('typeName',$r->type)
            ->where('post.id','!=',$r->postId)
            ->paginate(1);

        return view('layouts.similar-job-details')
            ->with('similarjob', $similarjob);

    }
}
