<?php

namespace App\Http\Controllers;

use App\Socialmedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Candidate;
use Session;

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

        $candidateInfo=array(
            'id'=>$r->id,
            'name'=>$r->name,
            'professionTitle'=>$r->profession,
            'phone'=>$r->phone,
            'email'=>$r->email,
        );

        $object = (object) $candidateInfo;
        return view('employee.editCandidateInformation',['candidateInfo' => $object])->render();

    }

    public function showJobApplied(){
        return view('employee.jobapplied');
    }
//    public function deleteSocialMedia(Request $r){
//        $media=Socialmedia::findOrFail($r->id)->delete();
//
//    }
    public function showChangepassword(){
        return view('employee.changepassword');
    }
    public function CandidateInfoUpdate($candidate,Request $r){

        $employeeInfo=Candidate::findOrFail($candidate);
        $employeeInfo->name=$r->name;
        $employeeInfo->professionTitle=$r->profession;
        $employeeInfo->phone=$r->phone;
        $employeeInfo->email=$r->email;

//        if($r->hasFile('image')){
//            $img = $r->file('image');
//            $filename= $candidate.'profileImage'.'.'.$img->getClientOriginalExtension();
//            $employeeInfo->image=$filename;
//            $location = public_path('employeeImages/'.$filename);
//            Image::make($img)->save($location);
//            $location2 = public_path('employeeImages/thumb/'.$filename);
//            Image::make($img)->resize(200, null, function ($constraint) {
//                $constraint->aspectRatio();
//            })->save($location2);
//        }


        $employeeInfo->save();
        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }

}
