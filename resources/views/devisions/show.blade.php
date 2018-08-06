@extends('layouts.app')



@section('content')
      <h1 class = "mt-5">{{$devision->name}}</h1>

      <div class="card card-block bg-faded">
        <p>Address: {{$devision->description}}</p>
      </div>


      <br><br>
    <a href="/laravel/AMT/public/devisions/{{$devision->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>

    <a href="/laravel/AMT/public/devisions" class="btn btn-secondary btn-sm">Go Back</a>

    {!!Form::open(['action' => ['DevisionsController@destroy', $devision->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
@endsection
