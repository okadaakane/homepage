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
    return view('layouts/main');
});

/* データベースを介さないので middleware=>authを使わない */
Route::group(['prefix' => 'admin'], function() { 
    Route::get('homepage/access','Admin\HomepageController@access');
    Route::get('homepage/insta', 'Admin\HomepageController@insta');
    Route::get('homepage/introduction','Admin\HomepageController@introduction');
    Route::get('homepage/youtube', 'Admin\HomepageController@youtube');
    Route::get('homepage/contact', 'Admin\HomepageController@contact');
});