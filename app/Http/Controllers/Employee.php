<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee extends Controller
{
    //

    public function showResume(){
        return view('employee.resume');
    }
    public function showJobApplied(){
        return view('employee.jobapplied');
    }
    public function showChangepassword(){
        return view('employee.changepassword');
    }

}
