@extends('layouts.master')

@section('content')
    <div class="row m-0">
        @include('layouts.cards.topleft')
        @include('layouts.cards.topright')
    </div>
    <div class="row m-0">
        @include('layouts.cards.botleft')
        @include('layouts.cards.botright')
    </div>
@endsection
