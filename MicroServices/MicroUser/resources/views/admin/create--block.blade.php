@extends('default')

@section('title')
    Tijdelijk Blokeren
@endsection

@section('content')
    <article class="create-form a-popup">
        <form class="create-form__form" action="/admin/create--block" method='POST'>
            @csrf

            <section class="create-form__section">
                <label for="name"> Selecteer de gebruiker </label>
                <select class="create-form__input" name="name" id="name">
                @foreach($users as $user)
                        <option value="{{$user->name}}">{{$user->name}}</option>
                @endforeach
                </select>
            </section>

            <section class="create-form__section">
                <label for="endDate">Blokkeren tot:</label>
                <input class="create-form__input" name="endDate" type="date" id="endDate"></input>
            </section>           

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Blokkeer</button>
            </section>
        </form>
    </article>
@endsection
