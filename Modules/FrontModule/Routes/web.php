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

Route::prefix('user')->group(function() {
    Route::get('/', function (){return redirect()->to(route('login'));});
    Route::middleware('auth:web')->get('/home', 'FrontModuleController@index')->name('home');
    Route::get('/login', 'Auth\UserAuthController@view_login')->name('login');
    Route::get('/signup', 'Auth\UserAuthController@view_signup')->name('user.signup');
    Route::post('/signup', 'Auth\UserAuthController@register')->name('user.signup');
    Route::post('/login', 'Auth\UserAuthController@login')->name('user.login');
    Route::get('/logout', 'Auth\UserAuthController@logout')->name('user.logout');
});

Route::middleware('auth:web')->prefix('payment')->group(function (){
    Route::get('/', 'PaymentController@index')->name('payment');
    Route::post('/subscribe', 'PaymentController@subscribe');
});
