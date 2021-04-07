<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('appointment_show');
// });

// Route::get('/','App\Http\Controllers\DoctorAppoinmentController@show');
// Route::get('appointment_form','App\Http\Controllers\DoctorAppoinmentController@create');
//Route::get('AppoinmentShow','App\Http\Controllers\DoctorAppoinmentController@show');
// Route::POST('appoinment_submit','App\Http\Controllers\DoctorAppoinmentController@store');
// Route::get('AppoinmentShow','App\Http\Controllers\DoctorAppoinmentController@index');

Route::get('/','App\Http\Controllers\TodoController@show');
Route::get('appointment_form','App\Http\Controllers\TodoController@create');
 Route::get('AppoinmentShow','App\Http\Controllers\TodoController@show');
Route::POST('appoinment_submit','App\Http\Controllers\TodoController@store');
 //Route::get('AppoinmentShow','App\Http\Controllers\TodoController@index');
Route::get('doc_delete/{id}','App\Http\Controllers\TodoController@destroy');
Route::get('doc_edit/{id}','App\Http\Controllers\TodoController@edit');
Route::POST('doc_update/{id}','App\Http\Controllers\TodoController@update')->name('doc_update');

Route::get('/registration', function () {
   return view('UserPanel/RegistrationForm');
});

Route::get('/form','App\Http\Controllers\UserFormController@view');
Route::POST('insertdata','App\Http\Controllers\UserFormController@store')->name('insertdata');



