<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratoryServicesTable extends Migration {

	public function up()
	{
		Schema::create('laboratory_services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('laboratory_services');
	}
}