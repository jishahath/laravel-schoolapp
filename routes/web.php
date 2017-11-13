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
Route::get('/student', 'HomeController@showStudents')->name('showStudents');
Route::get('/event', 'HomeController@showEvent')->name('showEvents');
Route::get('/duty', 'HomeController@showDuty')->name('showDuty');
Route::get('/studentlist', 'HomeController@showStudentlist')->name('showStudentlist');


Route::post('/student', ' StudentsController@students')->name('students');
Route::post('/event', ' StudentsController@events')->name('events');
Route::post('/duty', ' StudentsController@duty')->name('duty');
Route::post('/studentlist', ' StudentsController@studentlist')->name('studentlist');