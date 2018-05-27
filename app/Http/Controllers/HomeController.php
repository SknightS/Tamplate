<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('home')
            ->with('jobtype', $jobtype);

      //  ->with('leasetpost' , $leasetpost);
    }
}
