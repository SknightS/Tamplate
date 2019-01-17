<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtime extends Model
{
    //
    protected $table = 'jobtime';
    public $timestamps = false;
    public $primaryKey = 'id';
}
