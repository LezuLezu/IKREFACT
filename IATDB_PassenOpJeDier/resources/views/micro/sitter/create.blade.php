@extends('default')

@section('title')
    Aanvragen
@endsection

@section('content')
    <article class="create-form a-popup">
        
        <form class="create-form__form" action="/micro/application" method='POST'>
            @csrf

            <section class="create-form__section">
                <label for="namePet">Naam dier </label>
                <select class="create-form__input" name="namePet" id="namePet">
                @foreach($animals as $animal)
                        <option value="{{$animal->name}}">{{$animal->name}}</option>
                @endforeach
                </select>
            </section>


            <p class="create-form__text"> Door op de verzend knop te drukken bevestig je dat je op het dier zal gaan passen.</p>
            <section class="create-form__section">
                <button class="create-form__button application__button" type="submit">Verzend</button>
            </section>
        </form>
    </article>
@endsection