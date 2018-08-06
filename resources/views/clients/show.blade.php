@extends('layouts.app')



@section('content')
      <h1 class = "mt-5">{{$client->name}}</h1>

      <div class="card card-block bg-faded">
        <p>{{$client->name}}</p>
      </div>

      <small>Written on {{$client->created_at}}</small>
      <br><br>

    <a href="/laravel/AMT/public/clients" class="btn btn-secondary btn-sm">Go Back</a>


@endsection
