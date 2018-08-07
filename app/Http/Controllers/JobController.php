<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\Jobtype;
use App\Post;

class JobController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $jobtype = jobtype::select('id', 'typeName')
            ->get();

        $alljob = Post::select('*','jobName', 'company_branch.name as cname', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->paginate(1);

        $jobpost= Post::select('fkjobTypeId' ,DB::raw('COUNT(fkjobId) as total_post'))
            ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
            ->groupBy('fkjobTypeId')
            ->get();



        return view('layouts.jobListening')
            ->with('jobcountt', $jobpost)
            ->with('jobtypename',$jobtype)
            ->with('alljob', $alljob);
    }
}
