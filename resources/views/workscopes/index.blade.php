@extends('layouts.app')

@section('content')
  <h1>Workscopes</h1>
  @if(count($workscopes)>0)
    @foreach ($workscopes as $workscope)
      <div class="card card-block bg-faded">
        <h3><a href="/workscopes/{{$workscope->id}}">{{$workscope->title}}</a></h3>
      </div>
    @endforeach
  @else
    <p>No available Workscopes</p>
  @endif

  <br>
  <a href="/workscopes/create" class="btn btn-secondary">Add Workscope</a>
@endsection
