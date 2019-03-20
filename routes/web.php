<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@index');

	Route::resource('/users', 'UserController');
	Route::resource('/hospitals', 'HospitalController');
});

Route::get('lich-kham-benh-nhan', [
	'as' => 'lich-kham-benh-nhan',
	'uses'=>'PageControllerHI04@getPatientExaminationSchedule'
]);
Route::get('/doctor',"DoctorController@index");
Route::get('/doctor/examination',"DoctorController@examination");
