@extends('layouts.app')

@section('content')
<h1 class="mt-1">Create RFQ</h1> {!! Form::open(['action' => 'RfqsController@store', 'method ' => 'POST ']) !!}
<hr><br>
{{-- Received By radio buttons --}}
  <div class="form-check">
    <label><b>Received By:</b></label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="receivedBy" id="inlineRadio1" value="Email">
        <label class="form-check-label" for="inlineRadio1">Email</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="receivedBy" id="inlineRadio2" value="Mail">
        <label class="form-check-label" for="inlineRadio2">Mail</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="receivedBy" id="inlineRadio3" value="Fax">
        <label class="form-check-label" for="email">Fax</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="receivedBy" id="inlineRadio4" value="Hand">
        <label class="form-check-label" for="email">Hand</label>
      </div>
  </div>
  <hr>
{{-- Systems check boxes --}}
  <div class="form-check">
  <label><b>Systems:</b></label>
  @foreach($systems as $system)
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{$system->id}}" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">{{$system->name}}</label>
    </div>
  @endforeach
  </div>
<hr>
  {{-- Scope of wprk check boxes --}}
  <div class="form-check">
  <label><b>Scope of work:</b></label>
  @foreach($workscopes as $workscope)
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{$workscope->id}}" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">{{$workscope->title}}</label>
    </div>
  @endforeach
  </div>
<hr>
  {{-- Deleviry Place radio buttons --}}
    <div class="form-check">
      <label><b>Deleviry Place:</b></label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviryPlace" id="inlineRadio1" value="FOB">
          <label class="form-check-label" for="inlineRadio1">FOB</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviryPlace" id="inlineRadio2" value="Ex-Warehouse">
          <label class="form-check-label" for="inlineRadio2">Ex-Warehouse</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviryPlace" id="inlineRadio3" value="Client Warehouse">
          <label class="form-check-label" for="email">Client Warehouse</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviryPlace" id="inlineRadio4" value="Job Site">
          <label class="form-check-label" for="email">Job Site</label>
        </div>
    </div>
<hr>

  <label class="ml-3">Select project</label> <b class="ml-2">or</b> <a href="/laravel/AMT/public/projects/create" class="btn btn-primary btn-sm ml-3">Add new project</a>
<div class="form-group col-md-2">
      <select class="form-control form-control-sm">
        <option selected>Choose...</option>
        @foreach($projects as $project)
          <option>{{$project->name}}</option>
        @endforeach
      </select>
</div>

<br>
    <div class="form-group col-md-2">
          <label for="project_type">Project Type:</label>
          <select class="form-control form-control-sm">
            <option selected>Choose...</option>
            <option>Budgetary</option>
            <option>Bidding</option>
            <option>On Hand</option>
            <option>Awarded</option>
          </select>
    </div>
  <hr>



  {!! Form::close() !!}
@endsection
