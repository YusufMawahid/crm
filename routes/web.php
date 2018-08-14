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

Route::get('/', function () {
    return view('welcome');
});

Route::get('info', 'infoController@index');
Route::get('login', 'Auth\LoginController@index');
Route::get('register', 'Auth\RegisterController@index');
Route::post('register/postRegister', 'Auth\RegisterController@postRegister');
Route::post('login/postLogin', 'Auth\LoginController@postLogin');
Route::get('logout', 'Auth\LoginController@getLogout');
Route::get('dashboard', 'DashboardController@index');
Route::post('checklogin','Auth\LoginController@checklogin');
Route::get('transaksi','TransaksiController@index');
Route::post('step1/post','TransaksiController@postStep1');
Route::get('transaksi_2','TransaksiController@index2');
Route::post('step2/post','TransaksiController@postStep2');
Route::get('transaksi_3','TransaksiController@index3');
Route::get('delete_transaksi','TransaksiController@delete_transaksi');