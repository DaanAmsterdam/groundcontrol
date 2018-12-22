<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/projects', 'ProjectController@index');
Route::get('/projects/{project}', 'ProjectController@show');
Route::post('/projects', 'ProjectController@store');