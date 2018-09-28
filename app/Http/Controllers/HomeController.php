<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Job;
use App\Jobtype;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $leasetpost=(new Post())->leasetpost();

       // return $leasetpost;

        $jobtype = Jobtype::select('id', 'typeName', 'image')
            ->get();

        $post= Post::select('fkjobTypeId' ,DB::raw('COUNT(fkjobId) as total_post'))
             ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
            ->groupBy('fkjobTypeId')
            ->get();

        $latestJobs = Post::select('*','jobName', 'company_branch.name as cname', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount', 'master_state.name as statename','master_subarb.name as cityname','deadline')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->get();


        return view('home')
            ->with('jobtype', $jobtype)
            ->with('post', $post)
            ->with('latestjobs', $latestJobs);

    }
}
