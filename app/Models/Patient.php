<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model 
{

    protected $table = 'patients';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('phone', 'date_of_birth', 'gender', 'name', 'clinic_id', 'email', 'notes', 'insurance_id', 'area_id');

}