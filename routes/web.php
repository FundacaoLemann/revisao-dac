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

Route::group(['prefix' => 'admin'], function(){

    Auth::routes(['register' => false, 'reset' => false]);

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/atribuir', 'AssignController@index')->name('assign');
    Route::post('/atribuir', 'AssignController@store');

});

Route::prefix('/revisor')->name('reviewer.')->namespace('Reviewer')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

    });

});


