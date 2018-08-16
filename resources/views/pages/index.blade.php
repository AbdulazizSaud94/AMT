@extends('layouts.master')

@section('content')
    <div class="row">
        @include('layouts.cards.topleft')
        @include('layouts.cards.topright')
    </div>
    <div class="row">
        @include('layouts.cards.botleft')
        @include('layouts.cards.botright')
    </div>
@endsection
