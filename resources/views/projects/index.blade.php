@extends('layouts.app')

@section('content')
  <h1 class = "mt-5">Projects</h1>

  {{-- if there is 1 or more posts in DB --}}
  @if(count($projects) > 0)

    {{-- Loop print the title, body, timestam for each post --}}
    @foreach($projects as $project)
      <div class="card card-block bg-faded">
        <h3><a href="/projects/{{$project->id}}">{{$project->name}}</a></h3>
        <small>Project type: {{$project->type}}</small>
      </div>
    @endforeach

  @else {{-- if no post found --}}
    <p>No projects found</p>
  @endif

  <br>
  <a href="/projects/create" class="btn btn-secondary">Add project</a>
@endsection
