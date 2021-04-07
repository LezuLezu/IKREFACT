@extends('default')

@section('title')
    {{$sitters->name}}
@endsection

@section('content')
    @include('sitter.components.sitterCard--show')
@endsection

