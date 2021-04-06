@extends('default')

@section('title')
    {{$owners->name}}
@endsection

@section('content')
    @include('owner.components.ownerCard--show')
@endsection

