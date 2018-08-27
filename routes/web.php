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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rfqs/pending', 'RfqsController@pending'); // route for the pending function in rfq controller

Route::resource('rfqs', 'RfqsController');

Route::post('rfqs/{id}', 'RfqsController@approve');

Route::resource('projects', 'ProjectsController');

Route::resource('clients', 'ClientsController');

Route::resource('documents', 'DocumentsController');

Route::resource('systems', 'SystemsController');

Route::resource('workscopes', 'WorkscopesController');

Route::resource('divisions', 'DivisionsController');

Route::resource('competitors', 'CompetitorsController');


//Route::get('/manageusers','UserControllers@index');
//Route::get('/manageusers', 'UserController@getUsers');

Route::delete('/users/delete/{id}', "UsersController@delete");
Route::resource('users', "UsersController");

//Ajax Routes:
Route::post('/createProjectAjax','ProjectsController@createProjectAjax');
