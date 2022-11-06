<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// push from my branch
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::resource('user', UserController::class);
// Route::resource('clinic', 'ClinicController');
// Route::resource('appointments', 'AppointmentsController');
// Route::resource('admin', 'AdminController');
// Route::resource('setting', 'SettingController');
// Route::resource('patient', 'PatientController');
// Route::resource('service', 'ServiceController');
// Route::resource('insurance', 'InsuranceController');
// Route::resource('patientattachment', 'PatientAttachmentController');
// Route::resource('workinghours', 'WorkingHoursController');
// Route::resource('prescription', 'PrescriptionController');
// Route::resource('drug', 'DrugController');
// Route::resource('medicaltests', 'MedicalTestsController');
// Route::resource('area', 'AreaController');
// Route::resource('subscription', 'SubscriptionController');
// Route::resource('laboratory', 'LaboratoryController');
// Route::resource('laboratoryrequest', 'LaboratoryRequestController');
// Route::resource('laboratoryuser', 'LaboratoryUserController');
// Route::resource('laboratoryservices', 'LaboratoryServicesController');
// Route::resource('additionalvalue', 'AdditionalValueController');
// Route::resource('paymenttransaction', 'PaymentTransactionController');
// Route::resource('option', 'OptionController');
// Route::resource('addition', 'AdditionController');
// Route::resource('appointmentservice', 'AppointmentServiceController');
