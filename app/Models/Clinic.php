<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model 
{

    protected $table = 'clinic';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}