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

// Route::get('/', function () {
//     return view('welcome');
// });
use \App\Http\Middleware\CheckForLogin;
Route::get('/', function () {
    return redirect('/hotel/index');
});
//ログイン無しでも可能なページ
Route::get('/hotel', function () {
    return redirect('/hotel/index');
});
Route::get('/hotel/index', 'MainController@index');
Route::get('/hotel/booking/type', 'MainController@bookingType')->middleware('auth');
Route::get('/hotel/booking/date', 'MainController@bookingDate')->middleware('auth');
Route::post('/hotel/booking', 'MainController@reservation');


//ログインページ(仮)
Route::get('/hotel/register', 'LoginController@register');
Route::post('/hotel/register', 'LoginController@registerAction');

Route::get('/hotel/login', 'LoginController@login')->name('hotel.login');

Route::post('/hotel/login', 'LoginController@loginAction');
Route::get('/hotel/logout', 'LoginController@logout');


//ログイン必須のページ
Route::get('/hotel/roomcheck', 'ReservationController@roomCheck')->middleware('auth');
Route::get('/hotel/reservationdetail', 'ReservationController@reservationDetail')->middleware('auth');

//AUTHの改造待ち

//AUTH認証用
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
