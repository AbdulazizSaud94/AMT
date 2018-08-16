@extends('layouts.master')

@section('content')
  <h1>Divisions</h1>
  @if(count($divisions)>0)
    @foreach ($divisions as $division)
      <div class="card card-block bg-faded">
        <h3><a href="/laravel/AMT/public/divisions/{{$division->id}}">{{$division->name}}</a></h3>
      </div>
    @endforeach
  @else
    <p>No available Divisions</p>
  @endif

  <br>
  <a href="/laravel/AMT/public/divisions/create" class="btn btn-secondary">Add division</a>
@endsection
