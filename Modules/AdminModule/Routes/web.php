<?php

/**
 *  Admin Login
 */
Route::prefix('admin')->group(function () {

    Route::get('login', 'Auth\AdminAuthController@index')->name('admin.login');
    Route::post('login', 'Auth\AdminAuthController@login')->name('admin.login');
    Route::get('logout', 'Auth\AdminAuthController@logout')->name('admin.logout');

});


Route::group(['prefix'=>'admin', 'middleware' => ['auth:admin']], function () {

    Route::get('/', 'AdminModuleController@dashbord')->name('admins');
//    Route::resource('/admins', 'AdminModuleController');
    Route::get('/clients-ajax', 'AdminModuleController@dataTables');
    Route::get('/update/{user_id}/status', 'AdminModuleController@updateClientStatus');
    Route::get('/delete/{user_id}/client', 'AdminModuleController@deleteClient');

});
