<?php
Route::get('/', 'ProjectsController@index');

Route::group(['middleware' => ['web']], function () {
    Route::get('projects/{id}', 'ProjectsController@show');
});
