<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
class EmployerController extends Controller
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

    // show employer Dashboard
    public function showDashboard()
    {

         $userId=Auth::user()->id;

        $employerInfo = Company::where('fkuserId', $userId)->first();

        return view('employer.resume',compact('employerInfo'));


    }
}

