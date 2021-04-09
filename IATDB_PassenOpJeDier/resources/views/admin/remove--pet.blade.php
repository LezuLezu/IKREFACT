@extends('default')

@section('title')
    Verwijder Aanvraag 
@endsection

@section('content')
    <article class="create-form a-popup">
        <form class="create-form__form" action="/admin/remove--pet" method='POST'>
            @csrf

            <section class="create-form__section">
                <label for="name"> Selecter het dier </label>
                <select class="create-form__input" name="name" id="name">
                @foreach($animals as $animal)
                        <option value="{{$animal->name}}">{{$animal->name}}</option>
                @endforeach
                </select>
            </section>         

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Verwijder </button>
            </section>
        </form>
    </article>
@endsection
