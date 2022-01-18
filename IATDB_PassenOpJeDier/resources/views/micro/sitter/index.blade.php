@extends('default')

@section('title')
    {{'Alle Oppasser'}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
        @foreach($sitters as $sitter)
            @include('micro.sitter.components.sitterCard--index')
        @endforeach
    </ul>
@endsection