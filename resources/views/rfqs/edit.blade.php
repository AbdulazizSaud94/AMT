@extends('layouts.master')
@include('inc.createProjectModal')
@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Edit RFQ</h1>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => 'RfqsController@store', 'method ' => 'POST '])!!}

      <br><br>

      {{-- Received By radio buttons --}}
        <div class="form-check">
          <label><b>Received By:</b></label>
            <div class="form-check form-check-inline">
              @if($rfq->receiving_method == 'Email')
                <input class="form-check-input" type="radio" name="receiving_method" value="Email" checked>
                <label class="form-check-label" for="inlineRadio1">Email</label>
              @else
                <input class="form-check-input" type="radio" name="receiving_method" value="Email">
                <label class="form-check-label" for="inlineRadio1">Email</label>
              @endif
            </div>
            <div class="form-check form-check-inline">
              @if($rfq->receiving_method == 'Mail')
                <input class="form-check-input" type="radio" name="receiving_method" value="Mail" checked>
                <label class="form-check-label" for="inlineRadio2">Mail</label>
              @else
                <input class="form-check-input" type="radio" name="receiving_method" value="Mail">
                <label class="form-check-label" for="inlineRadio2">Mail</label>
              @endif
            </div>
            <div class="form-check form-check-inline">
              @if($rfq->receiving_method == 'Fax')
                <input class="form-check-input" type="radio" name="receiving_method" value="Fax" checked>
                <label class="form-check-label" for="email">Fax</label>
              @else
                <input class="form-check-input" type="radio" name="receiving_method" value="Fax">
                <label class="form-check-label" for="email">Fax</label>
              @endif
            </div>
            <div class="form-check form-check-inline">
              @if($rfq->receiving_method == 'Hand')
                <input class="form-check-input" type="radio" name="receiving_method" value="Hand" checked>
                <label class="form-check-label" for="email">Hand</label>
              @else
                <input class="form-check-input" type="radio" name="receiving_method" value="Hand">
                <label class="form-check-label" for="email">Hand</label>
              @endif
            </div>
        </div>
        <hr>
      {{-- Systems check boxes --}}
      <div class="form-check">
        <label><b>Systems:</b></label>
        @foreach($systems as $system)
          <div class="form-check">
                <input id="system-{{$system->id}}" class="form-check-input" type="checkbox" name = "system[]" value="{{$system->id}}" @if($rfq->hasSystem($system->name)) checked @endif>
                <label class="form-check-label" for="system-{{$system->id}}">{{$system->name}}</label>
              {{-- @elseif($system->name != $rfqsystem->name)
                <input id="system-{{$system->id}}" class="form-check-input" type="checkbox" name = "system[]" value="{{$system->id}}">
                <label class="form-check-label" for="system-{{$system->id}}">{{$system->name}}</label>
              @endif --}}
        </div>
        @endforeach
        </div>

      <hr>
        {{-- Scope of work check boxes --}}
      <div class="form-check">
          <label><b>Scope of work:</b></label>
            @foreach($workscopes as $workscope)
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name = "workscope[]" value="{{$workscope->id}}" @if($rfq->hasWorkscope($workscope->title)) checked @endif>
                  <label class="form-check-label" for="defaultCheck1">{{$workscope->title}}</label>
                </div>
              @endforeach
        </div>
      <hr>
        {{-- Deleviry Place radio buttons --}}
      <div class="form-check">
            <label><b>Deleviry Place:</b></label>
              <div class="form-check form-check-inline">
                @if ($rfq->delivery_place == 'FOB')
                  <input class="form-check-input" type="radio" name="delivery_place" value="FOB" checked>
                  <label class="form-check-label" for="inlineRadio1">FOB</label>
                @else
                  <input class="form-check-input" type="radio" name="delivery_place" value="FOB">
                  <label class="form-check-label" for="inlineRadio1">FOB</label>
                @endif
              </div>
              <div class="form-check form-check-inline">
                @if ($rfq->delivery_place == 'Ex-Warehouse')
                  <input class="form-check-input" type="radio" name="delivery_place" value="Ex-Warehouse" checked>
                  <label class="form-check-label" for="inlineRadio2">Ex-Warehouse</label>
                @else
                  <input class="form-check-input" type="radio" name="delivery_place" value="Ex-Warehouse">
                  <label class="form-check-label" for="inlineRadio2">Ex-Warehouse</label>
                @endif
              </div>
              <div class="form-check form-check-inline">
                @if ($rfq->delivery_place == 'Client Warehouse')
                  <input class="form-check-input" type="radio" name="delivery_place" value="Client Warehouse" checked>
                  <label class="form-check-label" for="email">Client Warehouse</label>
                @else
                  <input class="form-check-input" type="radio" name="delivery_place" value="Client Warehouse">
                  <label class="form-check-label" for="email">Client Warehouse</label>
                @endif
              </div>
              <div class="form-check form-check-inline">
                @if ($rfq->delivery_place == 'Job Site')
                  <input class="form-check-input" type="radio" name="delivery_place" value="Job Site" checked>
                  <label class="form-check-label" for="email">Job Site</label>
                @else
                  <input class="form-check-input" type="radio" name="delivery_place" value="Job Site">
                  <label class="form-check-label" for="email">Job Site</label>
                @endif
              </div>
        </div>
      <hr>

      {{-- Select project and type --}}
        <label class="ml-3"><b>Select project</b></label> <label class="ml-2">or</label> <a href="#" data-toggle="modal" data-target="#create-project-modal" class="btn btn-primary btn-sm ml-3">Add new project</a>
      <div class="form-group col-md-2">
            <select class="form-control form-control-sm" name = "project_id">
              <option selected>Choose...</option>
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
          <input class="form-check-input" type="checkbox" name = 'division[]' value="{{$division->id}}" @if($rfq->hasDivision($division->name)) checked @endif>
          <label class="form-check-label" for="defaultCheck1">{{$division->name}}</label>
          </div>
        @endforeach
        </div>
      <hr>

      {{-- Win_chance range selector --}}
        <div class="form-group col-md-2">
          <label for="formControlRange">Chance to win:</label>
          <input type="range" name = "win_chance" class="form-control-range">
        </div>

      <hr>

      {{-- Margin range selector --}}
        <div class="form-group col-md-2">
          <label for="formControlRange">Margin:</label>
          <input type="range" name = "margin" class="form-control-range">
        </div>
        <br>
        {{Form::submit('Submit', ['class' => 'btn btn-secondary'])}}
        {!! Form::close() !!}
    </div>
  </div>


@endsection
