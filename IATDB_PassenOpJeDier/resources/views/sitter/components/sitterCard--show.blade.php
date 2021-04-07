@extends('default')
@section('content')
<article class="card">
    <header class="card__header">
        <h2 class="card__heading">{{$sitters->name}}</h2>
    </header>
    <figure class="Card__figure">
            <img class="card__image" src="{{$sitters->image}}" alt="{{$sitters->name}}">
        </figure>
    <section class="card__text">
            <p>
                {{$sitters->description}}
            </p>
        </section>

   
</article>