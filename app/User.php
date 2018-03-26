<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
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
