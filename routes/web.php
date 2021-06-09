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


Auth::routes(['verify' => true]);

Route::resource('User','UserController');
Route::resource('Treatment', 'TreatmentController');
Route::resource('Appointments', 'AppointmentsController');


Route::get('/basic_theories', 'HomeController@basic_theories')->name('basic_theories');
Route::get('/acupuncture', 'HomeController@acupuncture')->name('acupuncture');
Route::get('/therapeutic_techniques', 'HomeController@therapeutic_techniques')->name('therapeutic_techniques');
Route::get('/treatments', 'HomeController@treatments')->name('treatments');
Route::get('/admin', 'HomeController@admin')->name('admin');


Route::get('/', 'HomeController@index')->name('home');

