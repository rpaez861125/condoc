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
    return view('auth.login');
});



Route::group(['prefix' => 'admin'], function () {

    Route::get('front', [
        'uses'      => 'FrontController@index',
        'as'        => 'front'
    ]);

    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
        'uses'      => 'UsersController@destroy',
        'as'        => 'users.destroy'
    ]);
    
});


Route::post('login', [
        'uses'  =>  'Auth\LoginController@login',
        'as'    =>  'login'
]);
