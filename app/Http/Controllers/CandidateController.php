<?php

namespace App\Http\Controllers;
use App\Candidate;
use App\Address;
use App\Skill;
use App\Socialmedia;
use App\Education;
use App\Workexperience;
use App\Freetime;
use Illuminate\Http\Request;


class CandidateController extends Controller
{

    public function __construct()
    {

    }

    public function showAllCandidate(Request $r) //show all cadidate with skill and address
    {
        $filterSkills=$r->skills;
        $filterLocation=$r->location;

        $candidateSkill=array();

        $skill = Skill::select('skill.candidateId', 'master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId');
        if ($filterSkills != null) {
            $skill = $skill->whereIn('master_skill.skillName', $filterSkills);

        }
        $skill = $skill->get();

        if ($filterSkills != null){
            foreach ($skill as $skills){
                array_push($candidateSkill,$skills->candidateId);

            }
        }

        $allCandidates = Candidate::select('candidate.candidateId','candidate.name','candidate.professionTitle','candidate.aboutme',
            'candidate.image','address.addresscol', 'master_subarb.name as city', 'master_state.name as state')
            ->leftJoin('address', 'address.addressId', '=', 'candidate.address_addressId')
            ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
            ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id');

        if ($filterLocation != null){

            $allCandidates=$allCandidates->whereIn('master_state.name',$filterLocation);
        }
        if ($candidateSkill != null){

            $allCandidates=$allCandidates->whereIn('candidate.candidateId',$candidateSkill);
        }


        $allSkill = Skill::select('skill.candidateId', 'master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
        ->get();

        $allCandidates=$allCandidates->paginate(1);



        if ($r->ajax()) {

            return view('layouts.showCandidateWithParameter',compact('allCandidates','allSkill','currentPage'));
        }

        return view('layouts.showAllCandidate',compact('allCandidates','skill'));


    }
    public function showCandidateWithParameter(Request $r) // filter cadidate with skill and address
    {
        $filterSkills=$r->skills;
        $filterLocation=$r->location;

        $candidateSkill=array();

        $skill = Skill::select('skill.candidateId', 'master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId');
        if ($filterSkills != null) {
            $skill = $skill->whereIn('master_skill.skillName', $filterSkills);

        }
        $skill = $skill->get();

        if ($filterSkills != null){
            foreach ($skill as $skills){
                array_push($candidateSkill,$skills->candidateId);

            }
        }
        $allCandidates = Candidate::select('candidate.candidateId','candidate.name','candidate.professionTitle','candidate.aboutme',
            'candidate.image','address.addresscol', 'master_subarb.name as city', 'master_state.name as state')
            ->leftJoin('address', 'address.addressId', '=', 'candidate.address_addressId')
            ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
            ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id');

        if ($filterLocation != null){

            $allCandidates=$allCandidates->whereIn('master_state.name',$filterLocation);
        }
        if ($candidateSkill != null){

            $allCandidates=$allCandidates->whereIn('candidate.candidateId',$candidateSkill);
        }


        $allSkill = Skill::select('skill.candidateId', 'master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
            ->get();

        $allCandidates=$allCandidates->paginate(10);


        return view('layouts.showCandidateWithParameter',compact('allCandidates','allSkill'));


    }

    public function showResume($candidateId) // retun candidate resume
    {

        $candidateInfo = Candidate::findOrFail($candidateId);

        if ($candidateInfo->address_addressId !=null){

            $employeeAddress=Address::select('address.addresscol','master_subarb.name as city','master_state.name as state')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$candidateInfo->address_addressId)
                ->get();

        }else{
            $employeeAddress=null;

        }

        $socialLink = Socialmedia::select('socialmedia.id','socialmedia.link','socialmedianame.name')
            ->leftJoin('socialmedianame', 'socialmedianame.id', '=', 'socialmedia.fkname')
            ->where('fkCandidateId', $candidateInfo->candidateId)->get();

        $workExperience = Workexperience::where('fkcandidateId', $candidateInfo->candidateId)->get();
        $education = Education::where('fkcandidateId', $candidateInfo->candidateId)->get();

        $skill = Skill::select('skill.id','skill.percentage','master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
            ->where('candidateId', $candidateInfo->candidateId)
            ->get();
        $FreeTimeInfo = Freetime::select('id','day','startTime','endTime')
            ->where('candidateId', $candidateInfo->candidateId)->get();


        return view('layouts.showCandidateDetails', compact('candidateInfo','socialLink','employeeAddress','workExperience','education','skill','FreeTimeInfo'));


    }

    public function getskilljson(){
        $skill = Skill::select('skill.id','skill.percentage','master_skill.skillName')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
           ->get();

        return response()->json($skill);
    }
}