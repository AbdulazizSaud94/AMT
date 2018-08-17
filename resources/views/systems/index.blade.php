@extends('layouts.master')

@section('content')
  <h1>Systems</h1>
  @if(count($systems)>0)
    @foreach ($systems as $system)
      <div class="card card-block bg-faded">
        <h3><a href="systems/{{$system->id}}">{{$system->name}}</a></h3>
      </div>
    @endforeach
  @else
    <p>No available Systems</p>
  @endif

  <br>
  <a href="systems/create" class="btn btn-secondary">Add system</a>
@endsection
