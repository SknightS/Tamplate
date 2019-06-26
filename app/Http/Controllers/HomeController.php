<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Job;
use App\Jobtype;
use Auth;

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
    public function index(Request $r)
    {



       // $leasetpost=(new Post())->leasetpost();



        $jobtype = Jobtype::select('id', 'typeName', 'image')
            ->get();

        $post= Post::select('fkjobTypeId' ,DB::raw('COUNT(fkjobId) as total_post'))
             ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
            ->groupBy('fkjobTypeId')
            ->get();

        $latestJobs = Post::select('*','post.id as postId','jobName', 'company_branch.name as cname', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount', 'master_state.name as statename','master_subarb.name as cityname','deadline')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->where('job.deadline','>=',Carbon::today()->format("Y-m-d"))
            ->orderBy('post.created_at','DESC')

            ->paginate(5);

        if ($r->ajax()) {

            return view('homeWithLatestJobs')
                ->with('latestjobs', $latestJobs);
        }


        return view('home')
            ->with('jobtype', $jobtype)
            ->with('post', $post)
            ->with('latestjobs', $latestJobs);

    }

    public function showAllLatestJobWithPerameter(Request $r)
    {


        $latestJobs = Post::select('*','post.id as postId','jobName', 'company_branch.name as cname', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount', 'master_state.name as statename','master_subarb.name as cityname','deadline')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->where('job.deadline','>=',Carbon::today()->format("Y-m-d"))
            ->orderBy('post.created_at','DESC')

            ->paginate(5);



            return view('homeWithLatestJobs')
                ->with('latestjobs', $latestJobs);

    }


}
