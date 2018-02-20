<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    protected $table = 'user';


    public function userType(){
        return $this->belongsTo(usertype::class,'id','fkuserTypeId');
    }
    public function comapanys(){

        return $this->hasMany(company::class,'id','fkuserId');
    }
    public function candidates(){

        return $this->belongsTo(candidate::class,'fkuserId','id');
    }
    public function address(){

        return $this->hasMany(candidate::class,'id','fkuserId');
    }


}
