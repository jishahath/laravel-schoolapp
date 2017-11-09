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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/student', 'HomeController@showStudent')->name('showStudent');
Route::get('/event', 'HomeController@showEvent')->name('showEvent');
Route::get('/duty', 'HomeController@showDuty')->name('showDuty');
Route::get('/studentlist', 'HomeController@showStudentlist')->name('showStudentlist');


Route::post('/student', ' StudentlistController@student')->name('student');
Route::post('/event', ' StudentlistController@student')->name('event');
Route::post('/duty', ' StudentlistController@duty')->name('duty');
Route::post('/studentlist', ' StudentlistController@studentlist')->name('studentlist');