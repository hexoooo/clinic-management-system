<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratoryRequestsTable extends Migration {

	public function up()
	{
		Schema::create('laboratory_requests', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('laboratory_id')->unsigned();
			$table->integer('patient_id')->unsigned()->nullable();
			$table->date('request_date');
			$table->text('laboratory_note');
			$table->text('doctor_notes');
			$table->boolean('status');
			$table->integer('laboratory_service_id')->unsigned();
			$table->decimal('cost');
			$table->date('request_change_date');
			$table->integer('appointment_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('laboratory_requests');
	}
}