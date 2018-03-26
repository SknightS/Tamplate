<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';

        public function leasetpost() {

//        $leasetpost= post::select('job.jobName as title ','company.name as comapanyname ')
            $leasetpost= post::select('job.*')
            ->leftJoin('job', 'post.fkjobId' , '=' , 'job.id')
           ->leftJoin('company', 'company.companyId' , '=' , 'job.fkcompanyId')
            ->get();


        return $leasetpost ;
    }

    public function jobs(){

        return $this->hasMany(job::class,'id','fkjobId');
    }
}
