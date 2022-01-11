@extends('default')

@section('title')
    Aanvraag overzicht
@endsection

@section('content')
    <article class="create-form a-popup">
        
        <form class="create-form__form" action="/application/{{$animal->id}}" method='POST'>
            @csrf            
            <p class="create-form__text">{{$sitter->name}} wil op {{$animal->name}} passen!</p>
            <section class="create-form__section">
                <!-- <button class="create-form__button application__button" onclick="window.location.href='/sitter/{{$sitter->id}}'">Bekijk oppas</button> -->
                <button class="create-form__button application__button" type="submit" name="action" value="accept">Accepteer</button>
                <button class="create-form__button application__button" type="submit" name="action" value="refuse">Weiger</button>

            </section>

        </form>
    </article>
@endsection