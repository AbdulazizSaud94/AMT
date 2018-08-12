<?php


Auth::routes();
Route::get('/','HomeController@index');
//Route::get('/manage-users','UserControllers@index');
//Route::get('/manage-users', 'UserController@getUsers');
//Route::post('/manageusers/edit/{{user->id}}','UserController@edit');
//Route::get('users.edit',"UsersController@edit");
Route::delete('/users/delete/{id}', "UsersController@delete");
Route::resource('users', "UsersController");


