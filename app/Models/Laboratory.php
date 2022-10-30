<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Laboratory extends Model 
{

    protected $table = 'laboratories';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'phone', 'email', 'officer_in_charge', 'clinic_id', 'Specialization');

}