<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	public function up()
	{
		Schema::create('admin', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('username');
			$table->string('password');
			$table->string('phone');
			$table->string('email');
		});
	}

	public function down()
	{
		Schema::drop('admin');
	}
}