@extends('layouts.master')

@section('content')
  <h1>Documents</h1>
  @if(count($documents)>0)
    @foreach ($documents as $document)
      <div class="card card-block bg-faded">
        <h3><a href="documents/{{$document->id}}">{{$document->title}}</a></h3>
      </div>
    @endforeach
  @else
    <p>No available Documents</p>
  @endif

  <br>
  <a href="documents/create" class="btn btn-secondary">Add Document</a>
@endsection
