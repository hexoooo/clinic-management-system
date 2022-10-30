<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentTransaction extends Model 
{

    protected $table = 'payment_transactions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('safe_id', 'clinic_id', 'paymentable_id', 'paymentable_type', 'pay_date', 'effect', 'amount');

}