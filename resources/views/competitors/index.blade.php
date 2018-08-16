@extends('layouts.master')

@section('content')
  <h1>Competitors</h1>
  @if(count($competitors)>0)
    @foreach ($competitors as $competitor)
      <div class="card card-block bg-faded">
        <h3><a href="competitors/{{$competitor->id}}">{{$competitor->name}}</a></h3>
      </div>
    @endforeach
  @else
    <p>No available Competitors</p>
  @endif

  <br>
  <a href="competitors/create" class="btn btn-secondary">Add Competitor</a>
@endsection
