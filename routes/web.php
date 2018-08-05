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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/about', function () {
    return 'Hello AMT about page';
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::view('/manageusers','manageusers');
Route::get('/manageusers', 'UserController@getUsers');
//Route::post('/manageusers/block/{{user->id}}','UserController@block');
//Route::post('/manageusers/edit/{{user->id}}','UserController@edit');
//Route::post('/manageusers/delete/{{user->id}}','UserController@delete');
//Route::delete('delete/{id}',array('uses' => 'UserController@delete', 'as' => 'My.route'));