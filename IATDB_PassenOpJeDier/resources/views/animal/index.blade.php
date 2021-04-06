@extends('default')

@section('title')
    {{'Alle dieren'}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
        @foreach($animals as $animal)
            @include('animal.components.animalCard--index')
        @endforeach
    </ul>
@endsection