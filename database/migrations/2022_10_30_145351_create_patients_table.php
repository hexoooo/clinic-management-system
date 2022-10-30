<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration {

	public function up()
	{
		Schema::create('patients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('phone');
			$table->date('date_of_birth');
			$table->boolean('gender');
			$table->string('name');
			$table->integer('clinic_id')->unsigned();
			$table->string('email');
			$table->text('notes');
			$table->integer('insurance_id')->unsigned();
			$table->integer('area_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('patients');
	}
}