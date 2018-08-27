@extends('layouts.master')



@section('content')
<h1 class="mt-5">{{$rfq->title}}</h1>

<div class="card card-block bg-faded">
  <p></p>
</div>

<small>Written on {{$rfq->created_at}}</small>
<br><br>

<a href="./" class="btn btn-secondary btn-sm">Go Back</a>
@if (auth()->user()->id == $rfq->user->id)
  {!!Form::open(['action' => ['RfqsController@destroy', $rfq->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
  {!!Form::close()!!}
@endif
<br><hr>

{!! Form::open(['action' => ['RfqsController@approve', $rfq->id], 'method' => 'POST']) !!}
  {{-- {{Form::hidden('_method', 'PUT')}} --}}
  {{Form::submit('Approve', ['class' => 'btn btn-success btn-sm float-left'])}}
{!! Form::close() !!}

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm float-left" data-toggle="modal" data-target="#reject-rfq-modal">
  Reject
</button>

<!-- Modal -->
<div class="modal fade" id="reject-rfq-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reject RFQ Ref#{{$rfq->id}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open( ['id'=>'create-project-form']) !!}
        <div class="form-group">
            {{Form::label('justification', 'Reject justifications')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write rejection justifications', 'rows' => 2, 'cols' => 40])}}
        </div>

        <div class="form-group">
            {{Form::label('recommendation', 'Recommendations')}}
            {{Form::textarea('recommendation', '', ['class' => 'form-control', 'placeholder' => 'Write recommendations', 'rows' => 2, 'cols' => 40])}}
        </div>
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

{{-- <a href="{{action('RfqsController@approve', $rfq->id)}}" class="btn btn-success btn-sm">Approve</a> --}}
@endsection
