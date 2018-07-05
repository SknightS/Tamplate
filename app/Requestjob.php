<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requestjob extends Model
{
    //
    protected $table = 'requestjob';

    public $timestamps = false;
    public $primaryKey = 'requestJobId';
}
