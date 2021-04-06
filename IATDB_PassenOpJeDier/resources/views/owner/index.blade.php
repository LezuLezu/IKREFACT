@extends('default')

@section('title')
    {{'Alle baasjes'}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
        @foreach($owners as $owner)
            @include('owner.components.ownerCard--index')
        @endforeach
    </ul>
@endsection