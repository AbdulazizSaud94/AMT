<?php


Auth::routes();
Route::get('/','HomeController@index');
Route::get('/manage-users','UserControllers@index');
Route::get('/manage-users', 'UserController@getUsers');
//Route::post('/manageusers/block/{{user->id}}','UserController@block');
//Route::post('/manageusers/edit/{{user->id}}','UserController@edit');
//Route::post('/manageusers/delete/{{user->id}}','UserController@delete');
//Route::delete('delete/{id}',array('uses' => 'UserController@delete', 'as' => 'My.route'));