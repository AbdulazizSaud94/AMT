@extends('layouts.app')

@section('content')
  <h1>Devisions</h1>
  @if(count($devisions)>0)
    @foreach ($devisions as $devision)
      <div class="card card-block bg-faded">
        <h3><a href="/laravel/AMT/public/devisions/{{$devision->id}}">{{$devision->name}}</a></h3>
      </div>
    @endforeach
  @else
    <p>No available Devisions</p>
  @endif

  <br>
  <a href="/laravel/AMT/public/devisions/create" class="btn btn-secondary">Add devision</a>
@endsection
