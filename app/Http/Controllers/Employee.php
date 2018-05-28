<?php

namespace App\Http\Controllers;

use App\Socialmedia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Candidate;
use App\Address;
use App\Education;
use App\Workexperience;
use App\Skill;
use App\Freetime;
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

        $workExperience = Workexperience::where('fkcandidateId', $candidateInfo->candidateId)->get();
        $education = Education::where('fkcandidateId', $candidateInfo->candidateId)->get();

        $skill = Skill::select('skill.id','skill.percentage','master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
            ->where('candidateId', $candidateInfo->candidateId)
            ->get();
        $FreeTimeInfo = Freetime::select('id','day','startTime','endTime')
            ->where('candidateId', $candidateInfo->candidateId)->get();



        return view('employee.resume', compact('candidateInfo','socialLink','employeeAddress','workExperience','education','skill','FreeTimeInfo'));


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
    public function showCandidateAboutMeForEdit(Request $r){

        $candidateInfo = Candidate::Select('aboutme')->where('candidateId', $r->id)->get();
        return view('employee.editCandidateAbouteMe',['candidateInfo' => $candidateInfo,'id'=>$r->id]);

    }
    public function CandidateAddWorkExperience(Request $r){


        return view('employee.addCandidateWorkExperience',['id'=>$r->id]);

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
    public function CandidateAboutMeUpdate($candidate,Request $r){

        $employeeInfo=Candidate::findOrFail($candidate);
        $employeeInfo->aboutme=$r->aboutMe;

        $employeeInfo->save();


        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }

    public function insertCandidateWorkExperience($candidate,Request $r){

        $employeeWorkExperience=new Workexperience();

        $employeeWorkExperience->comapnyName=$r->companyName;
        $employeeWorkExperience->postName=$r->postName;
        $employeeWorkExperience->duration=$r->duration;
        $employeeWorkExperience->description=$r->description;
        $employeeWorkExperience->fkcandidateId=$candidate;

        $employeeWorkExperience->save();

        Session::flash('success_msg', 'Work Experience Added Successfully!');
        return back();

    }
    public function deleteCandidateWorkExperience(Request $r){

        $employeeWorkExperience=Workexperience::destroy($r->id);

    }
    public function editCandidateWorkExperience(Request $r){

        $workExperienceInfo = Workexperience::findOrFail($r->id);

        return view('employee.editWorkExperience',['experience' => $workExperienceInfo,'id'=>$r->id]);

    }
    public function CandidateWorkExperienceUpdate($experienceId,Request $r){

        $workExperienceInfo = Workexperience::findOrFail($experienceId);

        $workExperienceInfo->comapnyName=$r->companyName;
        $workExperienceInfo->postName=$r->postName;
        $workExperienceInfo->duration=$r->duration;
        $workExperienceInfo->description=$r->description;


        $workExperienceInfo->save();

        Session::flash('success_msg', 'Work Experience Updated Successfully!');
        return back();

    }

    public function addEducation(Request $r){


        return view('employee.addEducation',['id'=>$r->id]);

    }

    public function insertCandidateEducation($candidate,Request $r){



        $education=new Education();

        $education->schoolName=$r->schoolName;
        $education->degreeName=$r->degreeName;
        $education->startDate=$r->startDate;
        if ($r->currentlyRunning){
            $education->currentlyRunning=$r->currentlyRunning;
        }else{
            $education->endDate=$r->endDate;
        }
        $education->fkcandidateId=$candidate;

        $education->save();

        Session::flash('success_msg', 'Education Added Successfully!');
        return back();

    }

    public function deleteCandidateEducation(Request $r){


        $employeeEducation=Education::destroy($r->id);

    }
    public function editCandidateEducation(Request $r){

        $educationInfo = Education::findOrFail($r->id);

        return view('employee.editEducation',['education' => $educationInfo,'id'=>$r->id]);

    }

    public function CandidateEducationUpdate($educationId,Request $r){

        $EducationInfo = Education::findOrFail($educationId);

        $EducationInfo->schoolName=$r->schoolName;
        $EducationInfo->degreeName=$r->degreeName;
        $EducationInfo->startDate=$r->startDate;
        if ($r->currentlyRunning){
            $EducationInfo->currentlyRunning=$r->currentlyRunning;
            $EducationInfo->endDate=null;
        }else{
            $EducationInfo->endDate=$r->endDate;
            $EducationInfo->currentlyRunning='0';
        }

        $EducationInfo->save();

        Session::flash('success_msg', 'Education Updated Successfully!');
        return back();

    }

    public function addSkill(Request $r){

        $candidateId=$r->id;
        $skills = DB::table('master_skill')->get();

        return view('employee.addSkill',compact('candidateId','skills'));

    }

    public function editCandidateSkill(Request $r){

        $skillInfo = Skill::select('skill.percentage','master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
            ->where('skill.id', $r->id)->get();
        $skillId = $r->id;
        $skills = DB::table('master_skill')->get();

        return view('employee.editSkill',compact('skillId','skillInfo','skills'));

    }

    public function deleteCandidateSkill(Request $r){


        $employeeSkill=Skill::destroy($r->id);

    }

    public function insertCandidateSkill($candidate,Request $r){


        $skillName=$r->skillName;
        $skillPercenTage=$r->skillPercentage;


        for ($i=0;$i<count($skillName);$i++){

            $skillInfo = DB::table('master_skill')->select('id')->where('skillName', $skillName[$i])->first();
            if (!empty($skillInfo)){

                $skillId=$skillInfo->id;

            }else{
                $skillId=DB::table('master_skill')->insertGetId(
                    ['skillName' => $skillName[$i]]
                );

            }

            $skill=new skill();
            $skill->skillId=$skillId;
            $skill->percentage=$skillPercenTage[$i];

            $skill->candidateId=$candidate;

            $skill->save();

        }

        Session::flash('success_msg', 'Skill Added Successfully!');
        return back();

    }
    public function CandidateSkillUpdate($skillsId,Request $r){


        $skillName=$r->skillName;



            $skillInfo = DB::table('master_skill')->select('id')->where('skillName', $skillName)->first();
            if (!empty($skillInfo)){

                $skillId=$skillInfo->id;

            }else{
                $skillId=DB::table('master_skill')->insertGetId(
                    ['skillName' => $skillName]
                );

            }

            $skill=Skill::findOrFail($skillsId);
            $skill->skillId=$skillId;
            $skill->percentage=$r->skillPercentage;

            $skill->save();


        Session::flash('success_msg', 'Skill Updated Successfully!');
        return back();

    }

    public function addFreeTime(Request $r){

        $candidateId=$r->id;
        return view('employee.addFreeTime',compact('candidateId'));

    }

    public function editCandidateFreeTime(Request $r){

        $FreeTimeInfo = Freetime::select('day','startTime','endTime')
            ->where('id', $r->id)->get();
        $FreeTimeId = $r->id;

        return view('employee.editFreeTime',compact('FreeTimeInfo','FreeTimeId'));

    }

    public function CandidateFreeTimeUpdate($FreeTimeId,Request $r){

        $FreeTimeInfo = Freetime::findOrFail($FreeTimeId);

        $FreeTimeInfo->day=$r->dayName;
        $FreeTimeInfo->startTime=date('H:i:s',strtotime($r->startTime));
        $FreeTimeInfo->endTime=date('H:i:s',strtotime($r->endTime));


        $FreeTimeInfo->save();

        Session::flash('success_msg', 'Free Time Updated Successfully!');
        return back();

    }

    public function deleteCandidateFreeTime(Request $r){


        $freeTime=Freetime::destroy($r->id);

    }

    public function insertCandidateFreeTime($candidate,Request $r){


        $dayName=$r->dayName;
        $startTime=$r->startTime;
        $endTime=$r->endTime;


        for ($i=0;$i<count($dayName);$i++){


            $freeTime=new Freetime();

            $freeTime->day=$dayName[$i];
            $freeTime->startTime=date('H:i:s',strtotime($startTime[$i]));
            $freeTime->endTime=date('H:i:s',strtotime($endTime[$i]));

            $freeTime->candidateId=$candidate;

            $freeTime->save();

        }

        Session::flash('success_msg', 'Free Time Added Successfully!');
        return back();

    }

}
