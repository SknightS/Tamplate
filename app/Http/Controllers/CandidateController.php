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

    public function showCandidateWithParameter(Request $r)
    {
        $filterSkills=$r->skills;
        return $filterSkills;


        $allCandidates = Candidate::select('candidate.candidateId','candidate.name','candidate.professionTitle','candidate.aboutme',
            'candidate.image','address.addresscol', 'master_subarb.name as city', 'master_state.name as state','master_skill.skillName')
            ->leftJoin('address', 'address.addressId', '=', 'candidate.address_addressId')
            ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
            ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')


            ->leftJoin('skill', 'skill.candidateId', '=', 'candidate.candidateId')
            ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId');


//            ->groupBy('skill.candidateId')
    foreach ($filterSkills as $skills){
     $allCandidates=$allCandidates->orWhereIn('master_skill.skillName', $skills);
        }

//        $allCandidates=$allCandidates->WhereIn('products.value', $filterSkills)

        $allCandidates->paginate(10);



//            $skill = Skill::select('skill.candidateId','master_skill.skillName')
//                ->leftJoin('master_skill', 'master_skill.id', '=', 'skill.skillId')
//                ->get();



//        return view('layouts.showCandidateWithParameter',compact('allCandidates','skill'));
        return view('layouts.showCandidateWithParameter',compact('allCandidates'));

    }
}