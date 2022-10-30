<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('cost');
			$table->integer('clinic_id')->unsigned();
			$table->date('from');
			$table->date('to');
			$table->integer('serviceable_id');
			$table->string('serviceable_type');
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}