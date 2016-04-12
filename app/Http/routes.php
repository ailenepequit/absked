<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

	Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');

    Route::resource('home', 'HomeController');
    Route::resource('rooms', 'RoomController');
    Route::resource('schedules', 'ScheduleController');
    Route::resource('subjects', 'SubjectController');
    Route::resource('faculty', 'FacultyController');
    Route::resource('users', 'UserController');
});
