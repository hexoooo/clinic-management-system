<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model 
{

    protected $table = 'appointments';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App/Model\User');
    }

    public function patient()
    {
        return $this->belongsTo('App/Model\Patient');
    }

    public function insurance()
    {
        return $this->belongsTo('App/Model\Insurance');
    }

    public function service()
    {
        return $this->belongsTo('App/Model\Service');
    }

    public function clinic()
    {
        return $this->belongsTo('App/Model\Clinic');
    }

    public function doctor()
    {
        return $this->belongsTo('App/Model\Doctor');
    }

    public function package()
    {
        return $this->belongsTo('App/Model\Package');
    }

    public function visit()
    {
        return $this->hasOne('App/Model\Visit');
    }

}