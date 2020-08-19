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
//Route::post('/','PageController@show');


Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['web', 'auth', 'roles']],function(){

	Route::get('/dashboard' ,'AdminController@index');
	
	Route::get('/dashboard/generate-absen','AdminController@generateAbsen');
	Route::get('/dashboard/attendance-list' ,'AdminController@attendanceList');
	Route::get('/dashboard/create', 'AdminController@create' );

	

});
Auth::routes();
Route::get('/index', 'StudentController@index')->name('index');

Route::group(['middleware' => ['CheckRole:teacher']], function () {
		Route::get('/', function(){
			return ('halooo');
		});

Route::get('/dashboard-student','StudentController@index');

});



Auth::routes();
Route::get('/index', 'AdminController@index')->name('index');



//Route::get('/daftar-hadir', 'SiswaController@daftar_hadir');
//Route::get('/edit-siswa/{id}', function (){ return 'coba halaman'; });


//Route::get('/student/crate','TeacherController@create');
//Route::post('/student/crate','TeacherController@store');

//Route::get('/daftar','TeacherController@index');
//Route::PACTH('/student','TeacherController@destroy');

//Route::get('/student/{id}/edit', 'TeacherController@edit');
//Route::put('/student/{id}/edit', 'TeacherController@update');


