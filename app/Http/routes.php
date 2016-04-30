<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

//Route::get('articles', 'ArticlesController@index');
//Route::get('strains', 'StrainsController@index');

//Route::get('articles/create', 'ArticlesController@create');
//Route::get('strains/add', 'StrainsController@add');

//Route::get('articles/{id}', 'ArticlesController@show');
//Route::get('strains/{id}', 'StrainsController@show');

//Route::post('articles', 'ArticlesController@store');
//Route::get('articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles', 'ArticlesController');
//Route::resource('strains', 'StrainsController');
