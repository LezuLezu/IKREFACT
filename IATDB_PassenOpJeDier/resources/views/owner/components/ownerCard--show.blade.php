@extends('default')
@section('content')
<article class="card">
    <header class="card__header">
        <h2 class="card__heading">{{$owners->name}}</h2>
    </header>
    <figure class="Card__figure">
            <img class="card__image" src="{{$owners->image}}" alt="{{$owners->name}}">
        </figure>
    <section class="card__text">
            <p>
                {{$owners->description}}
            </p>
        </section>

   
</article>