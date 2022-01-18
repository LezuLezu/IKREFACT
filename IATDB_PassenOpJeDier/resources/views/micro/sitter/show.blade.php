@extends('default')

@section('title')
    {{$sitters->name}}
@endsection

@section('content')
    @include('micro.sitter.components.sitterCard--show')
@endsection

