<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratoriesTable extends Migration {

	public function up()
	{
		Schema::create('laboratories', function(Blueprint $table) {
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('phone');
			$table->string('email');
			$table->string('officer_in_charge');
			$table->increments('id');
			$table->integer('clinic_id')->unsigned();
			$table->string('Specialization');
		});
	}

	public function down()
	{
		Schema::drop('laboratories');
	}
}