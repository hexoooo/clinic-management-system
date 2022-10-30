<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientAttachmentsTable extends Migration {

	public function up()
	{
		Schema::create('patient_attachments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('file_name');
			$table->string('file_path');
			$table->string('file_type');
		});
	}

	public function down()
	{
		Schema::drop('patient_attachments');
	}
}