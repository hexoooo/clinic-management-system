<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalValuesTable extends Migration {

	public function up()
	{
		Schema::create('additional_values', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->tinyInteger('type');
			$table->integer('additionable_id');
			$table->integer('addition_id');
			$table->string('additionable_type');
			$table->integer('clinic_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('additional_values');
	}
}