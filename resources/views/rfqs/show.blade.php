@extends('layouts.master')



@section('content')
      <h1 class = "mt-5">{{$rfq->title}}</h1>

      <div class="card card-block bg-faded">
        <p></p>
      </div>

      <small>Written on {{$rfq->created_at}}</small>
      <br><br>

    <a href="/laravel/AMT/public/rfqs" class="btn btn-secondary btn-sm">Go Back</a>


@endsection
