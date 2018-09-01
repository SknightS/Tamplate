<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    //
    protected $table = 'job';


    public function jobfees(){

        return $this->hasMany(jobfee::class,'id','fkjobId');
    }
    public function candidates(){

        return $this->belongsTo(jobtype::class,'id','fkjobTypeId');
    }
    public function address(){

        return $this->hasMany(jobtime::class,'id','fkjobId');
    }
    public function companys(){

        return $this->hasMany(company::class,'companyId','fkcompanyId');
    }
    
}
