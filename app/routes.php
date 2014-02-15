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

// set the homepage to list all tasks
Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);

Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', 'UserTasksController@index');
Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);

/*Route::get('{username}/tasks', function($username)
{
	$user = User::where('username', $username)->first();

    return $user->tasks;
});

Route::get('{username}/tasks/{id}', function($username, $id)
{
    // find task by its ID
    $user = User::with('tasks')->whereUsername($username)->first();
    $task = $user->tasks;

    // then load the view to display it
    return View::make('tasks.show', compact('user', 'task'));
});*/