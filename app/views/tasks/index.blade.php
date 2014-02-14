@extends('layouts.master')

@section('content')
	<h1>All Tasks</h1>
	<ul class="list-group">
		@foreach($tasks as $task)

			<li class="list-group-item">                
                <img src="{{ gravatar($task->user->email) }}" alt="{{ $task->user->name }}">
                {{ link_to("tasks/$task->id", $task->title) }}
            </li>		

		@endforeach
	</ul>
@stop