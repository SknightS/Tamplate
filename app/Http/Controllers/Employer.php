<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Employer extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {


            if(Auth::check() && Auth::user()->fkuserTypeId==UserType['empr']['code']){

                return $next($request);

            }else{
                Session::flash('message', 'please Login to Account Again .');
                return redirect()->guest(route('loginshow'));
            }


        });
    }
    public function showDashboard() // show employer Dashboard
    {

       // $userId=Auth::user()->id;

        return view('employer.resume');


    }
}
