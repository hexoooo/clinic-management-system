<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionsTable extends Migration {

	public function up()
	{
		Schema::create('prescriptions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('drug_id')->unsigned();
			$table->string('photo');
			$table->decimal('padding_top');
			$table->decimal('padding_bottom');
			$table->decimal('padding_left');
			$table->decimal('padding_right');
			$table->boolean('show_name');
			$table->boolean('show_age');
			$table->boolean('show_date');
			$table->integer('clinic_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('prescriptions');
	}
}