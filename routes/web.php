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
//     return view('welcome');
// });
Route::get('/view', "CustomerController@show");
Route::get('/delete/{id}','CustomerController@m');
Route::get('/insert', 'CustomerController@index');
Route::post('/insert1', 'CustomerController@save');
Route::get('/EditPage/{id}','CustomerController@edit_page');
Route::post('/Edit/{id}','CustomerController@edit_function');
Route::get('/pic/{id}','CustomerController@imageshow');
Route::get('/taskview','CustomerController@v');
Route::post('/task','CustomerController@session');
Route::get('/getPhn','PhnController@insertPhn');
Route::get('/get/{id}', 'PhnController@getdata');
Route::get('/view_dashboard', "CustomerController@dashboard");
Route::get('/login', 'login@login');
Route::post('/postlogin','CustomerController@store');

