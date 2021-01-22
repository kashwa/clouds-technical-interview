<?php

/**
 *  Admin Login
 */
Route::prefix('admin')->group(function () {

    Route::get('/', function (){return redirect()->to(route('admin.login'));});
    Route::get('login', 'Auth\AdminAuthController@index')->name('admin.login');
    Route::post('login', 'Auth\AdminAuthController@login')->name('admin.login');
    Route::get('logout', 'Auth\AdminAuthController@logout')->name('admin.logout');

});

/**
 * Admin panel Routes:
 *
 *  /                => Dashboard
 *  /clients-ajax    => AJAX retrieve clients table
 *  /update          => activate / deactivate client
 *  /delete          => remove client's record
 */
Route::group(['prefix'=>'admin', 'middleware' => ['auth:admin']], function () {

    Route::get('/', 'AdminModuleController@dashbord')->name('admins');
    Route::get('/clients-ajax', 'AdminModuleController@dataTables');
    Route::get('/update/{user_id}/status', 'AdminModuleController@updateClientStatus');
    Route::get('/delete/{user_id}/client', 'AdminModuleController@deleteClient');

});
