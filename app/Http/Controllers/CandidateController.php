<?php

namespace App\Http\Controllers;
use App\Candidate;
use App\Address;
use App\Skill;
use Illuminate\Http\Request;

class CandidateController extends Controller
{

    public function __construct()
    {

    }

    public function showAllCandidate(Request $r)
    {
        $filterSkills=$r->skills;
        $filterLocation=$r->location;
        //return $filterLocation;
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
//        $allCandidates=$allCandidates->toSql();
//        return $allCandidates;

        if ($r->ajax()) {
            return view('layouts.showCandidateWithParameter',compact('allCandidates','allSkill'));
        }

        return view('layouts.showAllCandidate',compact('allCandidates','skill'));


    }
    public function showCandidateWithParameter(Request $r)
    {
        $filterSkills=$r->skills;
        $filterLocation=$r->location;
        //return $filterLocation;
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
//        $allCandidates=$allCandidates->toSql();
//        return $allCandidates;

        return view('layouts.showCandidateWithParameter',compact('allCandidates','allSkill'));


    }
}