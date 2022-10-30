<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model 
{

    protected $table = 'services';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'cost', 'from', 'to', 'serviceable_id', 'serviceable_type');

}