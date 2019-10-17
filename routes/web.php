<?php



Auth::routes();

Route::get('/', 'PostController@index')-> name('pressIndex');

Route::get('/show/{id}' , 'PostController@show') -> name('pressShowPost');
