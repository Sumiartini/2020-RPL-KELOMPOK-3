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

Route::get('/','AttendanceListController@index');
Route::get('/attendanceList','AttendanceListController@attendanceList');

Route::post('/AbsentInput','AttendanceListController@AbsentInput');
Route::get('/AbsentInput','AttendanceListController@AbsentInput');

		

Route::group(['middleware' => ['web', 'auth']],function(){

//ini routes untuk teacher
	Route::get('/teachers','TeacherController@index');

	Route::get('/teachers/listofStudents/xiiRpl1','TeacherController@listOfStudents_rpl1');
	Route::get('/teachers/listofStudents/xiiRpl2','TeacherController@listOfStudents_rpl2');	
	Route::get('/teachers/listofStudents/xiiMM','TeacherController@listOfStudents_mm');
	Route::get('/teachers/attendanceList/{id}','AttendanceListController@generateAbsen');

	Route::get('/teachers/{id}/sick','AttendanceListController@generateSick');
	Route::get('/teachers/{id}/permission','AttendanceListController@generatePermission');
	Route::get('/teachers/{id}/skip','AttendanceListController@generateSkip');
	Route::get('/teachers/create','TeacherController@create');
	Route::post('/teachers/create','TeacherController@store');
	

	Route::get('/teachers/{id}/edit','TeacherController@edit');
	Route::post('/teachers/postEdit','TeacherController@update');

	Route::get('/teachers/destroy/{id}','TeacherController@destroy');

//ini routes untuk student
	Route::get('/students','StudentController@index');
	


});


