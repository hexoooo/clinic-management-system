<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insurance extends Model 
{

    protected $table = 'insurances';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'insurance_discount_percentage', 'patient_discount_percentage');

}