@extends('layouts.app')



@section('content')
      <h1 class = "mt-5">{{$post->title}}</h1>

      <div class="card card-block bg-faded">
        <p>{{$post->body}}</p>
      </div>

      <small>Written on {{$post->created_at}}</small>
      <br><br>
    <a href="/laravel/blog/public/posts/{{$post->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>

    <a href="/laravel/blog/public/posts" class="btn btn-secondary btn-sm">Go Back</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
@endsection
