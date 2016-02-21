@extends('pattern')


@section('navbar')
@stop

@section('content')

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
      <h2>Latest Projects</h2>

      @foreach ($projects as $project)
        <div class="col-xs-8 col-md-6">
              <h4>{{ $project->title }} </h4>
              <p> {{ $project->desc }} </p>
              <p><a class="btn btn-default" href="{{ action('ProjectsController@show', [$project->id])  }}" role="button">Show Project &raquo;</a></p>
        </div>
      @endforeach  
  </div>
  

  <div class="col-xs-6 col-md-4"></div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
      <h2> New Tasks: </h2>

      @foreach ($tasks as $task)
        <div class="col-xs-8 col-md-6">
              <h4> {{ $task->title }} </h4> 
              <p> {{ $task->desc }} </p>
              <p> {{ $task->date_for }}</p>
              <p><a class="btn btn-default" href="#" role="button">View &raquo;</a></p>
        </div>
      @endforeach  

  </div>
</div>


@stop
