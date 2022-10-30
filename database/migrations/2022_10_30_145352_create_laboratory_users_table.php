<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratoryUsersTable extends Migration {

	public function up()
	{
		Schema::create('laboratory_users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('laboratory_id')->unsigned();
			$table->string('name');
			$table->string('phone');
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('laboratory_users');
	}
}