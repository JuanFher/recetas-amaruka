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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function(){

    Route::resource('doctor', 'DoctorController');
    Route::resource('laboratory', 'LaboratoryController');
    Route::resource('medicine', 'MedicineController');
    Route::resource('patient', 'PatientController');
    Route::resource('unit', 'UnitController');
    Route::resource('user', 'UserController');
});