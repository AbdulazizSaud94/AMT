@extends('layouts.app')

@section('content')
  <h1 class = "mt-5">Edit Post</h1>

  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', $post->title , ['class' => 'form-control', 'placeholder' => 'Enter post title'])}}
    </div>

    <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Write your post here'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
