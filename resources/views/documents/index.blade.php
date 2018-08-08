@extends('layouts.app')

@section('content')
  <h1>Documents</h1>
  @if(count($documents)>0)
    @foreach ($documents as $document)
      <div class="card card-block bg-faded">
        <h3><a href="/laravel/AMT/public/documents/{{$document->id}}">{{$document->title}}</a></h3>
      </div>
    @endforeach
  @else
    <p>No available Documents</p>
  @endif

  <br>
  <a href="/laravel/AMT/public/documents/create" class="btn btn-secondary">Add Document</a>
@endsection
