<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('appointments', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('appointments', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('appointments', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('appointments', function(Blueprint $table) {
			$table->foreign('insurance_id')->references('id')->on('insurances')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('settings', function(Blueprint $table) {
			$table->foreign('working_hours_id')->references('id')->on('working_hours')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('settings', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('patients', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('patients', function(Blueprint $table) {
			$table->foreign('insurance_id')->references('id')->on('insurances')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('patients', function(Blueprint $table) {
			$table->foreign('area_id')->references('id')->on('areas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('services', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('working_hours', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('prescriptions', function(Blueprint $table) {
			$table->foreign('drug_id')->references('id')->on('drugs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('prescriptions', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('drugs', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('medical_tests', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('medical_tests', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('areas', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('subscriptions', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('laboratories', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('laboratory_requests', function(Blueprint $table) {
			$table->foreign('laboratory_id')->references('id')->on('laboratories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('laboratory_requests', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('laboratory_requests', function(Blueprint $table) {
			$table->foreign('laboratory_service_id')->references('id')->on('laboratory_services')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('laboratory_requests', function(Blueprint $table) {
			$table->foreign('appointment_id')->references('id')->on('appointments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('laboratory_users', function(Blueprint $table) {
			$table->foreign('laboratory_id')->references('id')->on('laboratories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('additional_values', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('payment_transactions', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('options', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinic')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('appointment_service', function(Blueprint $table) {
			$table->foreign('appointment_id')->references('id')->on('appointments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('appointment_service', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_clinic_id_foreign');
		});
		Schema::table('appointments', function(Blueprint $table) {
			$table->dropForeign('appointments_clinic_id_foreign');
		});
		Schema::table('appointments', function(Blueprint $table) {
			$table->dropForeign('appointments_patient_id_foreign');
		});
		Schema::table('appointments', function(Blueprint $table) {
			$table->dropForeign('appointments_service_id_foreign');
		});
		Schema::table('appointments', function(Blueprint $table) {
			$table->dropForeign('appointments_insurance_id_foreign');
		});
		Schema::table('settings', function(Blueprint $table) {
			$table->dropForeign('settings_working_hours_id_foreign');
		});
		Schema::table('settings', function(Blueprint $table) {
			$table->dropForeign('settings_clinic_id_foreign');
		});
		Schema::table('patients', function(Blueprint $table) {
			$table->dropForeign('patients_clinic_id_foreign');
		});
		Schema::table('patients', function(Blueprint $table) {
			$table->dropForeign('patients_insurance_id_foreign');
		});
		Schema::table('patients', function(Blueprint $table) {
			$table->dropForeign('patients_area_id_foreign');
		});
		Schema::table('services', function(Blueprint $table) {
			$table->dropForeign('services_clinic_id_foreign');
		});
		Schema::table('working_hours', function(Blueprint $table) {
			$table->dropForeign('working_hours_clinic_id_foreign');
		});
		Schema::table('prescriptions', function(Blueprint $table) {
			$table->dropForeign('prescriptions_drug_id_foreign');
		});
		Schema::table('prescriptions', function(Blueprint $table) {
			$table->dropForeign('prescriptions_clinic_id_foreign');
		});
		Schema::table('drugs', function(Blueprint $table) {
			$table->dropForeign('drugs_clinic_id_foreign');
		});
		Schema::table('medical_tests', function(Blueprint $table) {
			$table->dropForeign('medical_tests_clinic_id_foreign');
		});
		Schema::table('medical_tests', function(Blueprint $table) {
			$table->dropForeign('medical_tests_patient_id_foreign');
		});
		Schema::table('areas', function(Blueprint $table) {
			$table->dropForeign('areas_clinic_id_foreign');
		});
		Schema::table('subscriptions', function(Blueprint $table) {
			$table->dropForeign('subscriptions_service_id_foreign');
		});
		Schema::table('laboratories', function(Blueprint $table) {
			$table->dropForeign('laboratories_clinic_id_foreign');
		});
		Schema::table('laboratory_requests', function(Blueprint $table) {
			$table->dropForeign('laboratory_requests_laboratory_id_foreign');
		});
		Schema::table('laboratory_requests', function(Blueprint $table) {
			$table->dropForeign('laboratory_requests_patient_id_foreign');
		});
		Schema::table('laboratory_requests', function(Blueprint $table) {
			$table->dropForeign('laboratory_requests_laboratory_service_id_foreign');
		});
		Schema::table('laboratory_requests', function(Blueprint $table) {
			$table->dropForeign('laboratory_requests_appointment_id_foreign');
		});
		Schema::table('laboratory_users', function(Blueprint $table) {
			$table->dropForeign('laboratory_users_laboratory_id_foreign');
		});
		Schema::table('additional_values', function(Blueprint $table) {
			$table->dropForeign('additional_values_clinic_id_foreign');
		});
		Schema::table('payment_transactions', function(Blueprint $table) {
			$table->dropForeign('payment_transactions_clinic_id_foreign');
		});
		Schema::table('options', function(Blueprint $table) {
			$table->dropForeign('options_clinic_id_foreign');
		});
		Schema::table('appointment_service', function(Blueprint $table) {
			$table->dropForeign('appointment_service_appointment_id_foreign');
		});
		Schema::table('appointment_service', function(Blueprint $table) {
			$table->dropForeign('appointment_service_service_id_foreign');
		});
	}
}