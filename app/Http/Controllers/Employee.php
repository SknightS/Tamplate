<?php

namespace App\Http\Controllers;

use App\Socialmedia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Candidate;
use App\Address;
use Session;
use Image;
use Illuminate\Support\Facades\DB;

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

        if ($candidateInfo->address_addressId !=null){

            $employeeAddress=Address::select('address.addresscol','master_subarb.name as city','master_state.name as state')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$candidateInfo->address_addressId)
                ->get();

        }else{
            $employeeAddress=null;

        }

        $socialLink = Socialmedia::where('fkCandidateId', $candidateInfo->candidateId)->get();




        return view('employee.resume', compact('candidateInfo','socialLink','employeeAddress'));


    }
    public function showInforForEdit(Request $r){

        $addressStates = DB::table('master_state')->get();

        if ($r->address !=null){

            $employeeAddress=Address::select('address.addresscol','master_subarb.name as city','master_subarb.id as cityId','master_state.name as state','master_state.id as stateId')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$r->address)
                ->get();

        }else{
            $employeeAddress=null;

        }

        $candidateInfo=array(
            'id'=>$r->id,
            'name'=>$r->name,
            'professionTitle'=>$r->profession,
            'phone'=>$r->phone,
            'email'=>$r->email,
            'address'=>$r->address,
        );

        $object = (object) $candidateInfo;
        return view('employee.editCandidateInformation',['candidateInfo' => $object,'states'=>$addressStates,'address'=>$employeeAddress])->render();

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
    public function getAllCityByState(Request $r){

        $addressCities = DB::table('master_subarb')->where('master_state_id',$r->stateId)->get();

        if ($addressCities == null) {
            echo "<option value='' selected>Select City</option>";
        } else {
            echo "<option value='' selected>Select City</option>";
            foreach ($addressCities as $city) {
                echo "<option value='$city->id'>$city->name</option>";
            }
        }


    }
    public function getAllSocialMedia(Request $r){

        $socialMedias = Socialmedia::select('socialmedia.id','socialmedia.link','socialmedianame.name')
            ->leftJoin('socialmedianame', 'socialmedianame.id', '=', 'socialmedia.fkname')
            ->where('socialmedia.fkCandidateId',$r->id)
            ->get();

        return view('employee.editSocialMediaInformation',['candidateInfo' => $object,'states'=>$addressStates,'address'=>$employeeAddress])->render();





    }
    public function CandidateInfoUpdate($candidate,Request $r){

        $employeeInfo=Candidate::findOrFail($candidate);
        $employeeInfo->name=$r->name;
        $employeeInfo->professionTitle=$r->profession;
        $employeeInfo->phone=$r->phone;
        $employeeInfo->email=$r->email;

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $candidate.'profileImage'.'.'.$img->getClientOriginalExtension();
            $employeeInfo->image=$filename;
            $location = public_path('employeeImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('employeeImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }



        if ($employeeInfo->address_addressId != null) {
            $employeeAddress = Address::findOrFail($employeeInfo->address_addressId);
        }else{
            $employeeAddress= new Address();
        }
        $employeeAddress->addresscol=$r->address;
        $employeeAddress->master_subarb_id=$r->cities;

        $employeeAddress->save();

        $employeeInfo->address_addressId=$employeeAddress->addressId;
        $employeeInfo->save();



        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }

}
