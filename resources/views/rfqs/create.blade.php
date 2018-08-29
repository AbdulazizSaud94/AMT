@extends('layouts.master')
@include('inc.createProjectModal')
@include('inc.createClientModal')
@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Add RFQ</h1>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => 'RfqsController@store', 'method ' => 'POST '])!!}

      <br><br>

      {{-- Received By radio buttons --}}
        <div class="form-check">
          <label><b>Received By:</b></label>
            <div class="form-check form-check-inline">
              <input id="received-email" class="form-check-input" type="radio" name="receiving_method" value="Email">
              <label class="form-check-label" for="received-email">Email</label>
            </div>
            <div class="form-check form-check-inline">
              <input id="received-mail" class="form-check-input" type="radio" name="receiving_method" value="Mail">
              <label class="form-check-label" for="received-mail">Mail</label>
            </div>
            <div class="form-check form-check-inline">
              <input id="received-fax" class="form-check-input" type="radio" name="receiving_method" value="Fax">
              <label class="form-check-label" for="received-fax">Fax</label>
            </div>
            <div class="form-check form-check-inline">
              <input id="received-hand" class="form-check-input" type="radio" name="receiving_method" value="Hand">
              <label class="form-check-label" for="received-hand">Hand</label>
            </div>
        </div>
        <hr>
      {{-- Systems check boxes --}}
      <div class="form-check">
        <label><b>Systems:</b></label>
        @foreach($systems as $system)
          <div class="form-check">
                <input id="system-{{$system->id}}" class="form-check-input" type="checkbox" name = "system[]" value="{{$system->id}}">
                <label class="form-check-label" for="system-{{$system->id}}">{{$system->name}}</label>
        </div>
        @endforeach
        </div>

      <hr>
        {{-- Scope of work check boxes --}}
      <div class="form-check">
          <label><b>Scope of work:</b></label>
            @foreach($workscopes as $workscope)
              <div class="form-check">
                <input id="workscope-{{$workscope->id}}" class="form-check-input" type="checkbox" name = "workscope[]" value="{{$workscope->id}}">
                  <label class="form-check-label" for="workscope-{{$workscope->id}}">{{$workscope->title}}</label>
                </div>
              @endforeach
        </div>
      <hr>
        {{-- Deleviry Place radio buttons --}}
      <div class="form-check">
            <label><b>Deleviry Place:</b></label>
              <div class="form-check form-check-inline">

                  <input class="form-check-input" type="radio" name="delivery_place" value="FOB">
                  <label class="form-check-label" for="inlineRadio1">FOB</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="delivery_place" value="Ex-Warehouse">
                  <label class="form-check-label" for="inlineRadio2">Ex-Warehouse</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="delivery_place" value="Client Warehouse">
                  <label class="form-check-label" for="email">Client Warehouse</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="delivery_place" value="Job Site">
                  <label class="form-check-label" for="email">Job Site</label>
              </div>
        </div>
      <hr>

      {{-- Select project --}}
        <label class="ml-3"><b>Select project</b></label> <label class="ml-2">or</label> <a href="#" data-toggle="modal" data-target="#create-project-modal" class="btn btn-primary btn-sm ml-3">Add new project</a>
      <div class="form-group col-md-2">
            <select class="form-control form-control-sm" name = "project_id">
              <option selected>Choose...</option>
              @foreach($projects as $project)
                <option value="{{$project->id}}">{{$project->name}}</option>
              @endforeach
            </select>
      </div>

      {{-- project type radio buttons --}}
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
        <label class="ml-3"><b>Select client</b></label> <label class="ml-2">or</label> <a href="clients/create" class="btn btn-primary btn-sm ml-3">Add new client</a>
      <div class="form-group col-md-2">
            <select class="form-control form-control-sm" name="client_id">
              <option selected>Choose...</option>
              @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->name}}</option>
              @endforeach
            </select>
      </div>
      <hr>
      {{-- Divisions check boxes --}}
        <div class="form-check">
        <label><b>Divisions:</b></label>
        @foreach($divisions as $division)
          <div class="form-check">
          <input class="form-check-input" type="checkbox" name = 'division[]' value="{{$division->id}}">
          <label class="form-check-label" for="defaultCheck1">{{$division->name}}</label>
          </div>
        @endforeach
        </div>
      <hr>

      {{-- Win_chance range selector --}}
        <div class="form-group col-md-2">
          <label for="formControlRange">Win chance: <span id='win_chance'>50</span>%</label>
          <input type="range" name = "win_chance" class="form-control-range" oninput="document.getElementById('win_chance').innerHTML = this.value">
        </div>

      <hr>

      {{-- Margin range selector --}}
        <div class="form-group col-md-2">
          <label for="formControlRange">Margin: <span id='margin'>50</span>%</label>
          <input type="range" name = "margin" class="form-control-range" oninput="document.getElementById('margin').innerHTML = this.value">

        </div>
        <br>
        {{Form::submit('Submit', ['class' => 'btn btn-secondary'])}}
        {!! Form::close() !!}
    </div>
  </div>
@endsection
