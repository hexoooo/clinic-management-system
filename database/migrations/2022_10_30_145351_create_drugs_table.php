<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugsTable extends Migration {

	public function up()
	{
		Schema::create('drugs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('concentration');
			$table->text('info');
			$table->integer('clinic_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('drugs');
	}
}