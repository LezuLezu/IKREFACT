@extends('default')

@section('title')
    Creeër Oppasprofiel
@endsection

@section('content')
    <article class="create-form a-popup">
        <form class="create-form__form" action="/sitters" method='POST'>
            @csrf
             <!-- Afbeelding huis -->
             <section class="create-form__section">
                <label for="imageHome">Afbeelding huis </label>
                <select class="create-form__input" name="imageHome" id="imageHome">
                @foreach($images as $image)
                        <option value="{{$image->image}}">{{$image->image}}</option>
                @endforeach
                </select>
            </section>

            <!-- Omschrijving baasje -->
            <section class="create-form__section">
                <label for="description">Omschrijving van jezelf</label>
                <textarea class="create-form__input create-form__input--big" name="description" type="text-area" id="description"></textarea>
            </section>

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Verzend</button>
            </section>
        </form>
    </article>
@endsection
