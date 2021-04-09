@extends('default')

@section('title')
    {{'Alle dieren'}}
@endsection

@section('content')
@include('animal.components.filter--index')
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($animals as $animal)
            @include('animal.components.animalCard--ownerIndex')
        @endforeach
    </ul>
@endsection