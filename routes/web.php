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
Auth::routes();

Route::get('/','PageController@index');
Route::get('/attendanceList','PageController@attendanceList');


Route::group(['middleware' => ['web', 'auth']],function(){

//ini routes untuk teacher
	Route::get('/teachers','TeacherController@index');
	Route::get('/teachers/{id}','TeacherController@show');
	Route::get('/teachers/{id}/edit','TeacherController@edit');
	Route::post('/teachers/{id}','TeacherController@update');
	Route::get('/teachers/create','TeacherController@create' );
	Route::delete('/teachers/destroy','TeacherController@destroy' );

//ini routes untuk student
	Route::get('/students','StudentController@index');

});


