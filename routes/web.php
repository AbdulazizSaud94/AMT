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
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'PagesController@index');

    Route::get('/about', 'PagesController@about');

    Route::get('/rfqs/pending', 'RfqsController@pending'); // route for the pending function in rfq controller

    Route::get('/rfqs/rejected', 'RfqsController@rejected');

    Route::get('/rfqs/approved', 'RfqsController@approved');

    Route::resource('rfqs', 'RfqsController');

    Route::post('rfqs/approve/{id}', 'RfqsController@approve');

    Route::post('rfqs/reject/{id}', 'RfqsController@reject');

    Route::resource('projects', 'ProjectsController');

    Route::resource('projects', 'ProjectsController');

    Route::resource('clients', 'ClientsController');

    Route::resource('documents', 'DocumentsController');

    Route::resource('systems', 'SystemsController');

    Route::resource('workscopes', 'WorkscopesController');

    Route::resource('divisions', 'DivisionsController');

    Route::resource('competitors', 'CompetitorsController');

    Route::delete('/users/delete/{id}', "UsersController@delete");
    Route::resource('users', "UsersController");

//Ajax Routes:
    Route::post('/createProjectAjax','ProjectsController@createProjectAjax');
    Route::post('/createClientAjax','ClientsController@createClientAjax');
    Route::post('/createDocumentAjax','DocumentsController@createDocumentAjax');
});
