@extends('sablon')


@section('content')

	<h2> Project: {{ $project->title }} </h2>

	<p> {{ $project->desc }} </p>
	<p> Published at: {{ $project->published_at }}</p>
 	<br>

	<h4> Latest tasks: </h4>
	<p> Novi zadatak </p>
	<p> Novi zadatak </p>
	<p> Novi zadatak </p>


@stop