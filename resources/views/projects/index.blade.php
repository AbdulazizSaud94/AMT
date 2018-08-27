@extends('layouts.master')

@section('content')

  <div class="row m-1">
      <div class="col-md-10">
          <h1>Projects</h1>
      </div>
      <div class="col-md-2">
        <a href="projects/create" class="btn btn-primary">Add project</a>
      </div>
  </div>
  {{-- if there is 1 or more posts in DB --}}

  @if(count($projects) > 0)

    {{-- Loop print the title, body, timestam for each post --}}
    @foreach($projects as $project)
      <div class="list-group">

        <a class="list-group-item list-group-item-action" href="projects/{{$project->id}}">
            {{$project->name}}
            <br>
            <span class="small">Project type: {{$project->type}}</span>
        </a>
      </div>
    @endforeach

  @else {{-- if no post found --}}
      <div class="alert alert-info">
        <h1 class="h1">No projects were found</h1>
      </div>
  @endif

  <br>
@endsection
