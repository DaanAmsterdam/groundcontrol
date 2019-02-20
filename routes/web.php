<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'ProjectController@index');
    Route::resource('projects', 'ProjectController');

    Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
    Route::patch('/projects/{project}/tasks/{task}', 'ProjectTaskController@update');

    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();
