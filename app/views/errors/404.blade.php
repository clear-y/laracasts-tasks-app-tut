@extends('layouts.master')

@section('content')
    <div class="jumbotron spacer">
        <h1>404! <small>Oh dear...</small></h1>
        <p>I couldn't find that page for you. Maybe go back to the home page?</p>
        <p>{{ link_to("/", 'Go home', array('class' => 'btn btn-primary btn-lg')) }}</p>
    </div>
@stop