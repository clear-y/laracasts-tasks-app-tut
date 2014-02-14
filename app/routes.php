<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('tasks', 'TasksController@index');
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', function($username)
{
	$user = User::where('username', $username)->first();

    return $user->tasks;
});

Route::get('{username}/tasks/{id}', function($username, $id)
{
    // find task by its ID
    $user = User::whereUsername($username)->first();
    $task = $user->tasks()->findOrFail($id);

    // then load the view to display it
    return View::make('tasks.show', compact('task'));
});