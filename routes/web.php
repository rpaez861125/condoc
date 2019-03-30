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

Route::get('/', 'Auth\LoginController@showLoginForm');


  // Routes for the administrative part

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
        // End routes for the administrative part

        //Routes for oder users
Route::group(['prefix' => 'docente'], function () {

    Route::get('profile/{id}', 'FrontController@profile')->name('profile');
        
    
});
        //End routes for oder users


        //  Access routes for users

Route::post('login', [
        'uses'  =>  'Auth\LoginController@login',
        'as'    =>  'login'
]);
Route::post('logout', [
        'uses'  =>  'Auth\LoginController@logout',
        'as'    =>  'logout'
]);
        // End Access routes for users