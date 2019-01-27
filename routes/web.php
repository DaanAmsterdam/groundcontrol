<?php

//Route::get('/', function () {
//    return view('welcome');
//});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'ProjectController@index');
    Route::get('/projects', 'ProjectController@index');
    Route::get('/projects/create', 'ProjectController@create');
    Route::get('/projects/{project}', 'ProjectController@show');
    Route::get('/projects/{project}/edit', 'ProjectController@edit');
    Route::patch('/projects/{project}', 'ProjectController@update');
    Route::post('/projects', 'ProjectController@store');

    Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
    Route::patch('/projects/{project}/tasks/{task}', 'ProjectTaskController@update');
    
    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();
