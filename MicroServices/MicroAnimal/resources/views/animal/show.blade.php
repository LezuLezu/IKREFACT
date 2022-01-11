@extends('default')

@section('title')
    {{$animals->name}}
@endsection

@section('content')
    @include('animal.components.animalCard--show')
@endsection

