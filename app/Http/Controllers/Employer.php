<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
class Employer extends Controller
{

    //

    public function __construct()
    {
        $this->middleware(function ($request, $next) {


            if(Auth::check() && Auth::user()->fkuserTypeId=='empr'){

                return $next($request);

            }else{
                Session::flash('message', 'please Login to Account Again .');
                return redirect()->guest(route('loginshow'));
            }


        });
    }


    public function index()
    {

        return view('employer/employerDashboard');
    }

    public function favoriteEmployee()
    {
        return view('employer/favorite-candidates');
    }

    public function myprofile()
    {
        return view('employer/myprofile');
    }

    public function manageJob()
    {
        return view('employer/manage-job');
    }

    public function manageApplication()
    {
        return view('employer/manage-application');

    }
        public function showDashboard() // show employer Dashboard
        {

            // $userId=Auth::user()->id;

            return view('employer.resume');


        }
    }

