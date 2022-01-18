@extends('default')

@section('title')
    {{$animals->name}}
@endsection

@section('content')
    @include('micro.animal.components.animalCard--show')
@endsection

