<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionsTable extends Migration {

	public function up()
	{
		Schema::create('additions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->integer('addition_for');
			$table->integer('addition_type');
		});
	}

	public function down()
	{
		Schema::drop('additions');
	}
}