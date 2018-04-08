<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Job;

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

        return view('home');

      //  ->with('leasetpost' , $leasetpost);
    }
}
