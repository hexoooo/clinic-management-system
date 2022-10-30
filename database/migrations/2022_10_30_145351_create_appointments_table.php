<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentsTable extends Migration {

	public function up()
	{
		Schema::create('appointments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->date('appointment_date');
			$table->time('appointment_time');
			$table->tinyInteger('status');
			$table->integer('clinic_id')->unsigned();
			$table->integer('patient_id')->unsigned();
			$table->integer('service_id')->unsigned();
			$table->integer('insurance_id')->unsigned();
			$table->text('notes');
			$table->decimal('cost');
		});
	}

	public function down()
	{
		Schema::drop('appointments');
	}
}