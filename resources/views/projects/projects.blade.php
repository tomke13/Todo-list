@extends('pattern')


@section('content')

<div class="row">
  	<div class="col-xs-12 col-sm-6 col-md-8">
      <h2>	All Projects 
      	<a href="projects/add"> <button type="button" class="btn btn-primary"> Add Project </button> </a>
      </h2>

	      @foreach ($projects as $project)
	        <div class="col-xs-8 col-md-6">
	              <h4>{{ $project->title }} </h4>
	              <p> {{ $project->desc }} </p>
	              <p><a class="btn btn-default" href="{{ action('ProjectsController@show', [$project->id])  }}" role="button">Show Project &raquo;</a></p>
	        </div>
	      @endforeach  

  	</div>
 </div>

@stop