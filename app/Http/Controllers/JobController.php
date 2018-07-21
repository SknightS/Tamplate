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
        $alljob = Post::select()
            ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
          
        ->get();



        $jobpost= Post::select('fkjobTypeId' ,DB::raw('COUNT(fkjobId) as total_post'))
            ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
            ->groupBy('fkjobTypeId')
            ->get();



        return view('layouts.jobListening')
            ->with('jobcountt', $jobpost)
            ->with('jobtypename',$jobtype );
    }
}
