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

Auth::routes();

Route::get('/home', 'HomeController@index');

/**
 * Putanje kojima ima pristup samo administrator
 *
 */
Route::get('/admin-panel', 'AdminController@adminPanel');
Route::get('/user/delete/{user}', 'AdminController@deleteUser');
Route::get('/user/ban/{user}', 'AdminController@banUser');
Route::get('/user/unban/{user}', 'AdminController@unbanUser');
Route::get('user/role/{user}', 'AdminController@getRole');
Route::post('user/role/edit/{user}', 'AdminController@editRole');

/**
 * Putanje za text
 *
 */
Route::get('/createtext','AutorController@getTextForm');


/**
 * ERROR PUTANJE
 *
 */
Route::get('/banned', 'ErrorController@getBanned');