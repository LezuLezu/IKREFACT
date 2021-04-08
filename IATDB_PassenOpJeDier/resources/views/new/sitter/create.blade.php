@extends('default')

@section('title')
    Creeër Oppasprofiel
@endsection

@section('content')
    <article class="create-form a-popup">
        <form class="create-form__form" action="/sushi" method='POST'>
            @csrf

            <section class="create-form__section">
                <label for="name"> Naam </label>
                <input class="create-form__input" name="name" type="text" id="name">
            </section>

            <section class="create-form__section">
                <label for="kind"> Soort </label>
                <select class="create-form__input" name="kind" id="kind">
                @foreach($kind_of_sushi as $kind_of_sushi)
                        <option value="{{$kind_of_sushi->kind}}">{{$kind_of_sushi->kind}}</option>
                @endforeach
                </select>
            </section>

            <section class="create-form__section">
                <label for="description">Omschrijving</label>
                <textarea class="create-form__input create-form__input--big" name="description" type="text-area" id="description"></textarea>
            </section>

            <section class="create-form__section">
                <label for="image"> Afbeelding </label>
                <select class="create-form__input" name="image" id="image">
                @foreach($images as $image)
                        <option value="{{$image->image}}">{{$image->image}}</option>
                @endforeach
                </select>
            </section>

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Sushi aanmaken</button>
            </section>
        </form>
    </article>
@endsection
