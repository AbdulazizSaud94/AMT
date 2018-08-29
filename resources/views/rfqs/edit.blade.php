@extends('layouts.master')
@include('inc.createProjectModal')
@include('inc.createClientModal')
@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Edit RFQ</h1>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => ['RfqsController@update', $rfq->id], 'method ' => 'POST '])!!}

      <br><br>

      {{-- Received By radio buttons --}}
        <div class="form-check">
          <label><b>Received By:</b></label>
            <div class="form-check form-check-inline">
              @if($rfq->receiving_method == 'Email')
                <input id="received-email" class="form-check-input" type="radio" name="receiving_method" value="Email" checked>
                <label class="form-check-label" for="received-email">Email</label>
              @else
                <input id="received-email" class="form-check-input" type="radio" name="receiving_method" value="Email">
                <label class="form-check-label" for="received-email">Email</label>
              @endif
            </div>
            <div class="form-check form-check-inline">
              @if($rfq->receiving_method == 'Mail')
                <input id="received-mail" class="form-check-input" type="radio" name="receiving_method" value="Mail" checked>
                <label class="form-check-label" for="received-mail">Mail</label>
              @else
                <input id="received-mail" class="form-check-input" type="radio" name="receiving_method" value="Mail">
                <label class="form-check-label" for="received-mail">Mail</label>
              @endif
            </div>
            <div class="form-check form-check-inline">
              @if($rfq->receiving_method == 'Fax')
                <input id="received-fax" class="form-check-input" type="radio" name="receiving_method" value="Fax" checked>
                <label class="form-check-label" for="received-fax">Fax</label>
              @else
                <input id="received-fax" class="form-check-input" type="radio" name="receiving_method" value="Fax">
                <label class="form-check-label" for="received-fax">Fax</label>
              @endif
            </div>
            <div class="form-check form-check-inline">
              @if($rfq->receiving_method == 'Hand')
                <input id="received-hand" class="form-check-input" type="radio" name="receiving_method" value="Hand" checked>
                <label class="form-check-label" for="received-hand">Hand</label>
              @else
                <input id="received-hand" class="form-check-input" type="radio" name="receiving_method" value="Hand">
                <label class="form-check-label" for="received-hand">Hand</label>
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
                <input id="workscope-{{$workscope->id}}" class="form-check-input" type="checkbox" name = "workscope[]" value="{{$workscope->id}}" @if($rfq->hasWorkscope($workscope->title)) checked @endif>
                  <label class="form-check-label" for="workscope-{{$workscope->id}}">{{$workscope->title}}</label>
                </div>
              @endforeach
        </div>
      <hr>
        {{-- Deleviry Place radio buttons --}}
      <div class="form-check">
            <label><b>Deleviry Place:</b></label>
              <div class="form-check form-check-inline">
                @if ($rfq->delivery_place == 'FOB')
                  <input id = "deleviry-FOB" class="form-check-input" type="radio" name="delivery_place" value="FOB" checked>
                  <label class="form-check-label" for="deleviry-FOB">FOB</label>
                @else
                  <input id = "deleviry-FOB" class="form-check-input" type="radio" name="delivery_place" value="FOB">
                  <label class="form-check-label" for="deleviry-FOB">FOB</label>
                @endif
              </div>
              <div class="form-check form-check-inline">
                @if ($rfq->delivery_place == 'Ex-Warehouse')
                  <input id = "deleviry-ExW" class="form-check-input" type="radio" name="delivery_place" value="Ex-Warehouse" checked>
                  <label class="form-check-label" for="deleviry-ExW">Ex-Warehouse</label>
                @else
                  <input id = "deleviry-ExW" class="form-check-input" type="radio" name="delivery_place" value="Ex-Warehouse">
                  <label class="form-check-label" for="deleviry-ExW">Ex-Warehouse</label>
                @endif
              </div>
              <div class="form-check form-check-inline">
                @if ($rfq->delivery_place == 'Client Warehouse')
                  <input id = "deleviry-CW" class="form-check-input" type="radio" name="delivery_place" value="Client Warehouse" checked>
                  <label class="form-check-label" for="deleviry-CW">Client Warehouse</label>
                @else
                  <input id = "deleviry-CW" class="form-check-input" type="radio" name="delivery_place" value="Client Warehouse">
                  <label class="form-check-label" for="deleviry-CW">Client Warehouse</label>
                @endif
              </div>
              <div class="form-check form-check-inline">
                @if ($rfq->delivery_place == 'Job Site')
                  <input id = "deleviry-JS" class="form-check-input" type="radio" name="delivery_place" value="Job Site" checked>
                  <label class="form-check-label" for="deleviry-JS">Job Site</label>
                @else
                  <input id = "deleviry-JS" class="form-check-input" type="radio" name="delivery_place" value="Job Site">
                  <label class="form-check-label" for="deleviry-JS">Job Site</label>
                @endif
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
            @if($rfq->project_type == 'Budgetary')
              <input id="type-budgetary" class="form-check-input" type="radio" name="project_type" value="Budgetary" checked>
              <label class="form-check-label" for="type-budgetary">Budgetary</label>
            @else
              <input id="type-budgetary" class="form-check-input" type="radio" name="project_type" value="Budgetary">
              <label class="form-check-label" for="type-budgetary">Budgetary</label>
            @endif
          </div>
          <div class="form-check form-check-inline">
            @if($rfq->project_type == 'Bidding')
              <input id="type-bidding" class="form-check-input" type="radio" name="project_type" value="Bidding" checked>
              <label class="form-check-label" for="type-bidding">Bidding</label>
            @else
              <input id="type-budgetary" class="form-check-input" type="radio" name="project_type" value="Bidding">
              <label class="form-check-label" for="type-bidding">Bidding</label>
            @endif
          </div>
          <div class="form-check form-check-inline">
            @if($rfq->project_type == 'On Hand')
              <input id="type-OH" class="form-check-input" type="radio" name="project_type" value="On Hand" checked>
              <label class="form-check-label" for="type-OH">On Hand</label>
            @else
              <input id="type-OH" class="form-check-input" type="radio" name="project_type" value="On Hand">
              <label class="form-check-label" for="type-OH">On Hand</label>
            @endif
          </div>
          <div class="form-check form-check-inline">
            @if($rfq->project_type == 'Awarded')
              <input id="type-awarded" class="form-check-input" type="radio" name="project_type" value="Awarded">
              <label class="form-check-label" for="type-awarded">Awarded</label>
            @else
              <input id="type-awarded" class="form-check-input" type="radio" name="project_type" value="Awarded">
              <label class="form-check-label" for="type-awarded">Awarded</label>
            @endif
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
              <input id="division-{{$division->id}}" class="form-check-input" type="checkbox" name = 'division[]' value="{{$division->id}}" @if($rfq->hasDivision($division->name)) checked @endif>
              <label class="form-check-label" for="division-{{$division->id}}">{{$division->name}}</label>
              </div>
            @endforeach
        </div>
      <hr>

      {{-- Win_chance range selector --}}
        <div class="form-group col-md-2">
          <label for="formControlRange">Win chance: <span id='win_chance'>{{$rfq->win_chance}}</span>%</label>
          <input type="range" name = "win_chance" value="{{$rfq->win_chance}}" class="form-control-range" oninput="document.getElementById('win_chance').innerHTML = this.value">
        </div>

      <hr>

      {{-- Margin range selector --}}
        <div class="form-group col-md-2">
          <label for="formControlRange">Margin: <span id='margin'>{{$rfq->margin}}</span>%</label>
          <input type="range" name = "margin" value="{{$rfq->margin}}" class="form-control-range" oninput="document.getElementById('margin').innerHTML = this.value">
        </div>
        <br>
        {{Form::submit('Submit', ['class' => 'btn btn-secondary'])}}
        {!! Form::close() !!}
    </div>
  </div>


@endsection
