@extends('layouts.master')

@section('content')
	<h1>All Tasks</h1>
	<ul class="list-group">
		@foreach($tasks as $task)

			<li class="list-group-item">                
                <a href="/{{ $task->user->username }}/tasks"><img src="{{ gravatar($task->user->email) }}" alt="{{ $task->user->username }}"></a>
                {{ link_to_task($task) }}
            </li>		

		@endforeach
	</ul>

    <hr>
    
    @if(isset($users))
        @include('tasks/partials/_form')
    @endif
@stop