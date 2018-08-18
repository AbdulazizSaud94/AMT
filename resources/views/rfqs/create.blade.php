@extends('layouts.app')

@section('content')
<h1 class="mt-1">Create RFQ</h1>
@include('inc.createProjectModal')
@include('inc.createClientModal')
{!! Form::open(['action' => 'RfqsController@store', 'method ' => 'POST '])!!}
<hr>
<br>

{{-- Received By radio buttons --}}
  <div class="form-check">
    <label><b>Received By:</b></label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="received_by" value="Email">
        <label class="form-check-label" for="inlineRadio1">Email</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="received_by" value="Mail">
        <label class="form-check-label" for="inlineRadio2">Mail</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="received_by" value="Fax">
        <label class="form-check-label" for="email">Fax</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="received_by" value="Hand">
        <label class="form-check-label" for="email">Hand</label>
      </div>
  </div>
  <hr>
{{-- Systems check boxes --}}
  <div class="form-check">
  <label><b>Systems:</b></label>
  @foreach($systems as $system)
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{$system->id}}">
    <label class="form-check-label" for="defaultCheck1">{{$system->name}}</label>
    </div>
  @endforeach
  </div>
<hr>
  {{-- Scope of work check boxes --}}
  <div class="form-check">
  <label><b>Scope of work:</b></label>
  @foreach($workscopes as $workscope)
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{$workscope->id}}">
    <label class="form-check-label" for="defaultCheck1">{{$workscope->title}}</label>
    </div>
  @endforeach
  </div>
<hr>
  {{-- Deleviry Place radio buttons --}}
    <div class="form-check">
      <label><b>Deleviry Place:</b></label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviry_place" value="FOB">
          <label class="form-check-label" for="inlineRadio1">FOB</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviry_place" value="Ex-Warehouse">
          <label class="form-check-label" for="inlineRadio2">Ex-Warehouse</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviry_place" value="Client Warehouse">
          <label class="form-check-label" for="email">Client Warehouse</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviry_place" value="Job Site">
          <label class="form-check-label" for="email">Job Site</label>
        </div>
    </div>
<hr>

{{-- Select project and type --}}
  <label class="ml-3"><b>Select project</b></label> <label class="ml-2">or</label> <a href="#" data-toggle="modal" data-target="#create-project-modal" class="btn btn-primary btn-sm ml-3">Add new project</a>
<div class="form-group col-md-2">
      <select class="form-control form-control-sm" id="project-list">
        <option selected disabled>Choose Project..</option>
        @foreach($projects as $project)
          <option value="{{$project->id}}">{{$project->name}}</option>
        @endforeach
      </select>
</div>

<div class="form-check">
  <label>Project Type:</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="project_type" value="Budgetary">
      <label class="form-check-label" for="inlineRadio1">Budgetary</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="project_type" value="Bidding">
      <label class="form-check-label" for="inlineRadio2">Bidding</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="project_type" value="On Hand">
      <label class="form-check-label" for="email">On Hand</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="project_type" value="Awarded">
      <label class="form-check-label" for="email">Awarded</label>
    </div>
</div>
  <hr>

{{-- Selelct client --}}
  <label class="ml-3"><b>Select client</b></label> <label class="ml-2">or</label> <a href="#" data-toggle="modal" data-target="#create-client-modal" class="btn btn-primary btn-sm ml-3">Add new client</a>
<div class="form-group col-md-2">
      <select id="client-list" class="form-control form-control-sm">
        <option selected>Choose...</option>
        @foreach($clients as $client)
          <option>{{$client->name}}</option>
        @endforeach
      </select>
</div>
<hr>
{{-- Decisions check boxes --}}
  <div class="form-check">
  <label><b>Devisions:</b></label>
  @foreach($devisions as $devision)
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{$devision->id}}">
    <label class="form-check-label" for="defaultCheck1">{{$devision->name}}</label>
    </div>
  @endforeach
  </div>
<hr>

<form>
  <div class="form-group col-md-2">
    <label for="formControlRange">Chance to win:</label>
    <input type="range" name = "win_chane" class="form-control-range">
  </div>
</form>
<hr>
<form>
  <div class="form-group col-md-2">
    <label for="formControlRange">Margin:</label>
    <input type="range" name = "margin" class="form-control-range">
  </div>
</form>
  {!! Form::close() !!}
@endsection
