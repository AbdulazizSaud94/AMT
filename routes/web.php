<?php


Auth::routes();
Route::get('/','HomeController@index');
//Route::get('/manage-users','UserControllers@index');
//Route::get('/manage-users', 'UserController@getUsers');
//Route::post('/manageusers/edit/{{user->id}}','UserController@edit');
Route::resource('users', "UserController");

//Route::delete('/manage-users/delete/{id}', "UserController@delete");