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
//ログイン無しでも可能なページ
Route::get('/hotel/index','MainController@index');
Route::get('/hotel/booking','MainController@booking');


//ログインページ
Route::get('/hotel/login','AcountController@login');
// Route::push('/hotel/loginaction','AcountController@loginAction');
// Route::push('/hotel/logout','AcountController@logout');


//ログイン必須のページ




//AUTH認証用
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
