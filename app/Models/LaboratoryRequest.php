<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaboratoryRequest extends Model 
{

    protected $table = 'laboratory_requests';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('laboratory_id', 'patient_id', 'request_date', 'laboratory_note', 'doctor_notes', 'status', 'laboratory_service_id', 'cost', 'request_change_date', 'appointment_id');

}