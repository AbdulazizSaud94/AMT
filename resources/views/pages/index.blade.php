@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @include('layouts.cards.topleft')
        </div>
        <div class="col-md-6">
            @include('layouts.cards.topright')
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('layouts.cards.botleft')
        </div>
        <div class="col-md-6">
            @include('layouts.cards.botright')
        </div>
    </div>
@endsection
