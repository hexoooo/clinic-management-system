<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentServiceTable extends Migration {

	public function up()
	{
		Schema::create('appointment_service', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('appointment_id')->unsigned();
			$table->integer('service_id')->unsigned();
			$table->decimal('cost');
		});
	}

	public function down()
	{
		Schema::drop('appointment_service');
	}
}