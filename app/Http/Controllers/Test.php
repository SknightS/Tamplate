<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\post;
use App\job;


class Test extends Controller
{
    //

    public function index(){
        return view('home');
    }
    public function showpost(){

        $alljob = Post::select('*','job.id as jobid','post.id as postid','jobName', 'company_branch.name as cname', 'post.description as pdes','typeName','address.addresscol as address','job.job_amount as job_amount')
            ->leftJoin('job', 'job.id', 'post.fkjobId')
            ->leftjoin ('company_branch','job.company_branch_id','company_branch.id')
            ->leftjoin('jobtype','job.fkjobTypeId','jobtype.id')
            ->leftjoin('address','address.addressId','job.address_addressId')
            ->leftjoin('master_subarb','address.master_subarb_id','master_subarb.id')
            ->leftjoin('master_state','master_subarb.master_state_id','master_state.id')
            ->paginate(1);

return view('test')
    ->with('', $alljob)
    ;
     //   return $leads;
    }
}
