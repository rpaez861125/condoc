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
/***********************************************************************************************/

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

/***********************************************************************************************/
        //Routes for oder users
Route::group(['prefix' => 'docente'], function () {

    Route::get('profile/{id}', 'FrontController@profile')->name('profile');

    Route::resource('units', 'UnitsController');
        Route::get('units/{id}/destroy', 'UnitsController@destroy')->name('units.destroy');

        Route::resource('grades', 'GradesController');
        Route::get('grades/{id}/destroy', 'GradesController@destroy')->name('grades.destroy');

        Route::resource('groups', 'GroupsController');
        Route::get('groups/{id}/destroy', 'GroupsController@destroy')->name('groups.destroy');

        Route::resource('munic', 'MunicipalitiesController');
        Route::get('munic/{id}/destroy', 'MunicipalitiesController@destroy')->name('munic.destroy');

        Route::resource('cons_pop', 'PopularcouncilsController');
        Route::get('cons_pop/{id}/destroy', 'PopularcouncilsController@destroy')->name('cons_pop.destroy');

        Route::resource('courses', 'CoursesController');
        Route::get('courses/{id}/destroy', 'CoursesController@destroy')->name('courses.destroy');

        Route::resource('subjects', 'SubjectsController');
        Route::get('subjects/{id}/destroy', 'SubjectsController@destroy')->name('subjects.destroy');

        Route::resource('students', 'StudentsController');
        Route::get('students/{id}/destroy', 'StudentsController@destroy')->name('students.destroy');
        
    
});
        //End routes for oder users

/***********************************************************************************************/

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