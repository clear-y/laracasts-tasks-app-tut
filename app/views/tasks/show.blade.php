@extends('layouts.master')

@section('content')
	<article>
		<h1>{{ $task->title }}</h1>
		<p>{{ $task->body }}</p>
	</article>
	{{ link_to('/tasks', '&larr; Go back') }}
@stop