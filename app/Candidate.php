<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    protected $table = 'candidate';
    public $timestamps = false;
    public $primaryKey = 'candidateId';
}
