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

        $jobtype = jobtype::select('id', 'typeName', 'image')
            ->get();

        $post= Post::select('fkjobTypeId' ,DB::raw('COUNT(fkjobId) as total_post'))
             ->leftJoin('job', 'job.id', '=', 'post.fkjobId')
            ->groupBy('fkjobTypeId')
            ->get();


        return view('home')
            ->with('jobtype', $jobtype)
            ->with('post', $post);

      //  ->with('leasetpost' , $leasetpost);
    }
}
