<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointments extends Model 
{

    protected $table = 'appointments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('appointment_date', 'appointment_time', 'status', 'clinic_id', 'service_id', 'insurance_id', 'notes', 'cost');

}