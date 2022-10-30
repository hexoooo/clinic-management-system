<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionsTable extends Migration {

	public function up()
	{
		Schema::create('options', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('value');
			$table->integer('clinic_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('options');
	}
}