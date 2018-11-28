<?php
Route::get('/','CreatesController@home');
Route::get('/create',function(){
	return view('create');
});
Route::post('/insert',   'CreatesController@add');//add post into the database;
Route::get('/update/{id}', 'CreatesController@update');
Route::post('/edit/{id}', 'CreatesController@edit');//update the post;
Route::get('/delete/{id}', 'CreatesController@delete');//delete the post;
Route::get('/read/{id}', 'CreatesController@read');//read more about the post
?>
