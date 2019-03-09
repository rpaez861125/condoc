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

Route::get('front', [
    'uses'      => 'FrontController@index',
    'as'        => 'front'
]);

Route::group(['prefix' => 'admin'], function () {

    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
        'uses'      => 'UsersController@destroy',
        'as'        => 'users.destroy'
    ]);
    
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
