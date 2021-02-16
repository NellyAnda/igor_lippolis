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


Route::get('/acupuncture', 'HomeController@acupuncture')->name('acupuncture');
Route::get('/therapeutic_technics', 'HomeController@therapeutic_technics')->name('therapeutic_technics');
Route::get('/treatments', 'HomeController@treatments')->name('treatments');

Route::get('/', 'HomeController@index')->name('home');