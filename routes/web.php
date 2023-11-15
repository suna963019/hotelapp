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
Route::get('/hotel',function(){
    return redirect('/hotel/index');
});
Route::get('/hotel/index','MainController@index');
Route::get('/hotel/bookingform','MainController@bookingForm');
Route::get('/hotel/booking','MainController@booking');
Route::post('/hotel/booking','MainController@reservation');


//ログインページ
Route::get('/hotel/login','AcountController@login');
Route::post('/hotel/login','AcountController@loginAction');
// Route::push('/hotel/logout','AcountController@logout');


//ログイン必須のページ
Route::get('/hotel/roomcheck','ReservationController@roomCheck');
Route::get('/hotel/reservationdetail','ReservationController@reservationDetail');

//AUTHの改造待ち

//AUTH認証用
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
