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

//        $user=User::select('usertype.id as typeid')
//            ->leftJoin('usertype','usertype.id','=','user.fkuserTypeId')
//            ->get();
//
//        $leads=(new post())->leasetpost();

return view('layouts.job-details');
     //   return $leads;
    }
}
