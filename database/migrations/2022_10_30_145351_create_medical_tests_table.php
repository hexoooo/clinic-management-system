<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalTestsTable extends Migration {

	public function up()
	{
		Schema::create('medical_tests', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->integer('clinic_id')->unsigned();
			$table->integer('patient_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('medical_tests');
	}
}