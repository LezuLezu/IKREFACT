@extends('default')

@section('title')
    Review
@endsection

@section('content')
    <article class="create-form a-popup">
        <form class="create-form__form " action="/review/{{$sitter->id}}" method='POST'>
            @csrf
            <p class="create-form__text">Geef {{$sitter->name}} een review!</p>

            <!-- Rating -->
            <section class="create-form__section">
                <label for="rating"> Rating </label>
                <input class="create-form__input" name="rating" type="text" id="rating" placeholder="5/5">
            </section>
               
            

            <!-- Omschrijving -->
            <section class="create-form__section">
                <label for="review_text">Review feedback</label>
                <textarea class="create-form__input create-form__input--big" name="review_text" type="text-area" id="review_text"></textarea>
            </section>

            <section class="create-form__section u-flex-v-center">
                <button class="create-form__button" type="submit">Verstuur</button>
            </section> 
        </form>
    </article>
@endsection
