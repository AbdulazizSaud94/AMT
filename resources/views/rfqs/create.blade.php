@extends('layouts.app')

@section('content')
<h1 class="mt-1">Create RFQ</h1> {!! Form::open(['action' => 'RfqsController@store', 'method ' => 'POST '])!!}
<hr><br>
{{-- Received By radio buttons --}}
  <div class="form-check">
    <label><b>Received By:</b></label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="received_by" id="inlineRadio1" value="Email">
        <label class="form-check-label" for="inlineRadio1">Email</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="received_by" id="inlineRadio2" value="Mail">
        <label class="form-check-label" for="inlineRadio2">Mail</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="received_by" id="inlineRadio3" value="Fax">
        <label class="form-check-label" for="email">Fax</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="received_by" id="inlineRadio4" value="Hand">
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
  {{-- Scope of work check boxes --}}
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
          <input class="form-check-input" type="radio" name="deleviry_place" id="inlineRadio1" value="FOB">
          <label class="form-check-label" for="inlineRadio1">FOB</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviry_place" id="inlineRadio2" value="Ex-Warehouse">
          <label class="form-check-label" for="inlineRadio2">Ex-Warehouse</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviry_place" id="inlineRadio3" value="Client Warehouse">
          <label class="form-check-label" for="email">Client Warehouse</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="deleviry_place" id="inlineRadio4" value="Job Site">
          <label class="form-check-label" for="email">Job Site</label>
        </div>
    </div>
<hr>

{{-- Select project and type --}}
  <label class="ml-3"><b>Select project</b></label> <label class="ml-2">or</label> <a href="/laravel/AMT/public/projects/create" class="btn btn-primary btn-sm ml-3">Add new project</a>
<div class="form-group col-md-2">
      <select class="form-control form-control-sm">
        <option selected>Choose...</option>
        @foreach($projects as $project)
          <option>{{$project->name}}</option>
        @endforeach
      </select>
</div>

<div class="form-check">
  <label>Project Type:</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="project_type" id="inlineRadio1" value="Budgetary">
      <label class="form-check-label" for="inlineRadio1">Budgetary</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="project_type" id="inlineRadio2" value="Bidding">
      <label class="form-check-label" for="inlineRadio2">Bidding</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="project_type" id="inlineRadio3" value="On Hand">
      <label class="form-check-label" for="email">On Hand</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="project_type" id="inlineRadio4" value="Awarded">
      <label class="form-check-label" for="email">Awarded</label>
    </div>
</div>
  <hr>

{{-- Selelct client --}}
  <label class="ml-3"><b>Select client</b></label> <label class="ml-2">or</label> <a href="/laravel/AMT/public/clients/create" class="btn btn-primary btn-sm ml-3">Add new client</a>
<div class="form-group col-md-2">
      <select class="form-control form-control-sm">
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
    <input class="form-check-input" type="checkbox" value="{{$devision->id}}" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">{{$devision->name}}</label>
    </div>
  @endforeach
  </div>
<hr>

<form>
  <div class="form-group col-md-2">
    <label for="formControlRange">Chance to win:</label>
    <input type="range" name = "win_chane" class="form-control-range" id="formControlRange">
  </div>
</form>
<hr>
<form>
  <div class="form-group col-md-2">
    <label for="formControlRange">Margin:</label>
    <input type="range" name = "margin" class="form-control-range" id="formControlRange">
  </div>
</form>
  {!! Form::close() !!}
@endsection
