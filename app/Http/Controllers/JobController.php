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

    public function index()
    {
        $jobtype = Jobtype::select('id', 'typeName')
            ->get();

        $alljob = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->paginate(1);

        $jobpost= Post::select('fkjobTypeId',DB::raw('COUNT(fkjobId) as total_post'))
            ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
            ->groupBy('fkjobTypeId')
            ->get();



        return view('layouts.jobListening')
            ->with('jobcountt', $jobpost)
            ->with('jobtypename',$jobtype)
            ->with('alljob', $alljob);
    }

    public function jobdetails($typename, $postid){


        if(Auth::check()){

            $candidateId=Candidate::where('fkuserId',Auth::user()->id)->first()->candidateId;

            $jobdetails = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname','job.description as jdetails','company_branch.image as image ',
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
            $jobdetails = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname','job.description as jdetails','company_branch.image as image ', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount', 'master_state.name as statename','master_subarb.name as cityname')
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


        $similarjob  = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->where('typeName',$typename)
            ->where('post.id','!=',$postid)
            ->get();




        return view('layouts.job-details')

            ->with('jobdetails', $jobdetails)
            ->with('similarjob', $similarjob)
            ->with('candidate', $candidateId);

    }
}
