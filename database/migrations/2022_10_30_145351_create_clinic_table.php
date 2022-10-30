<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicTable extends Migration {

	public function up()
	{
		Schema::create('clinic', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('clinic');
	}
}