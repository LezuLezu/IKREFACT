@extends('default')

@section('title')
    deblokkeren
@endsection

@section('content')
    <article class="create-form a-popup">
        <form class="create-form__form" action="/admin/create--deblock" method='POST'>
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
                <button class="create-form__button" type="submit">Deblokkeer</button>
            </section>
        </form>
    </article>
@endsection
