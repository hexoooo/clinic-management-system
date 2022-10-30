<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTransactionsTable extends Migration {

	public function up()
	{
		Schema::create('payment_transactions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('safe_id')->default('1');
			$table->integer('clinic_id')->unsigned();
			$table->integer('paymentable_id');
			$table->string('paymentable_type');
			$table->date('pay_date');
			$table->tinyInteger('effect');
			$table->tinyInteger('type');
			$table->decimal('amount');
		});
	}

	public function down()
	{
		Schema::drop('payment_transactions');
	}
}