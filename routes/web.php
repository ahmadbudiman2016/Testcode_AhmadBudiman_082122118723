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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*login*/
Route::get('/login','AuthController@login')->name('login');
Route::post('/postLogin','AuthController@postLogin');
Route::get('/logout','AuthController@logout');
Route::group(['middleware' => 'auth'], function(){
	/*dasboard*/
	Route::get('/dashboard','DashboardController@index');
	/*pelanggan*/
	Route::get('/pelanggan','MejaController@index');
		
	/*menu*/
	Route::get('/menu','MenuController@index');
	Route::post('/menu/create','MenuController@create');
	Route::get('/menu/{id}/delete','MenuController@delete');
	Route::get('/menu/{id}/edit','MenuController@edit');
	Route::post('/menu/{id}/update','MenuController@update');

	/*pelayan*/
	Route::get('/pelayan','PelayanController@index');
	/*/pesnanan*/
	Route::get('/pesanan','PesananController@index');
	/*jenis menu*/
	Route::get('/jenisMenu','JenisMenuController@index');

});
	

