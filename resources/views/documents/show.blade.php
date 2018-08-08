@extends('layouts.app')



@section('content')
      <h1 class = "mt-5">{{$document->title}}</h1>

      <div class="card card-block bg-faded">
        <p>Address: {{$document->description}}</p>
      </div>


      <br><br>
    <a href="/laravel/AMT/public/documents/{{$document->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>

    <a href="/laravel/AMT/public/documents" class="btn btn-secondary btn-sm">Go Back</a>

    {!!Form::open(['action' => ['DocumentsController@destroy', $document->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
@endsection
