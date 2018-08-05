@extends('layouts.app')

@section('content')
  
  <h1 class = "mt-5">Create Post</h1>

  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter post title'])}}
    </div>

    <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Write your post here'])}}
    </div>








    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
