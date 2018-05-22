<?php

namespace App\Http\Controllers;

use App\Socialmedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Candidate;

class Employee extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {


            if(Auth::user()->fkuserTypeId=='emp'){

                return $next($request);

            }else{
                //write logic here
            }


        });
    }
    public function showResume(){

        $userId=Auth::user()->id;
        $candidateInfo = Candidate::where('fkuserId', $userId)->first();

        $socialLink = Socialmedia::where('fkCandidateId', $candidateInfo->candidateId)->get();


        return view('employee.resume', compact('candidateInfo','socialLink'));


    }
    public function showInforForEdit(Request $r){

        $socialLinks = Socialmedia::leftJoin('socialmedianame', 'socialmedianame.id', '=', 'socialmedia.fkname')->where('fkCandidateId', $r->id)->get();

        $candidateInfo=array(
            'id'=>$r->id,
            'name'=>$r->name,
            'professionTitle'=>$r->professionTitle,
            'phone'=>$r->phone,
            'email'=>$r->email,
        );

        $object = (object) $candidateInfo;
        return view('employee.editCandidateInformation',['candidateInfo' => $object,'socialLink'=>$socialLinks])->render();

    }

    public function showJobApplied(){
        return view('employee.jobapplied');
    }
    public function showChangepassword(){
        return view('employee.changepassword');
    }

}
