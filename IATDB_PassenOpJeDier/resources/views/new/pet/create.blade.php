@extends('default')

@section('title')
    Creeër Oppasvraag
@endsection

@section('content')
    <article class="create-form a-popup">
        <form class="create-form__form " action="/animals" method='POST'>
            @csrf
            <!-- naam dier -->
            <section class="create-form__section">
                <label for="name"> Naam van dier </label>
                <input class="create-form__input" name="name" type="text" id="name">
            </section>
                <!-- soort dier -->
            <section class="create-form__section">
                <label for="species"> Soort dier </label>
                <select class="create-form__input" name="species" id="species">
                @foreach($kind_of_animal as $kind_of_animal)
                        <option value="{{$kind_of_animal->species}}">{{$kind_of_animal->species}}</option>
                @endforeach
                </select>
            </section>
            <!-- Leeftijd dier -->
            <section class="create-form__section">
                <label for="age"> Leeftijd van dier </label>
                <input class="create-form__input" name="age" type="text" id="age">
            </section>
            <!-- Ras -->
            <section class="create-form__section">
                <label for="breed"> Ras van dier </label>
                <input class="create-form__input" name="breed" type="text" id="breed">
            </section>
                <!-- Afbeelding dier -->
            <section class="create-form__section">
                <label for="imagePet">Afbeelding dier </label>
                <select class="create-form__input" name="imagePet" id="imagePet">
                @foreach($images as $image)
                        <option value="{{$image->image}}">{{$image->image}}</option>
                @endforeach
                </select>
            </section>

            <!-- Omschrijving dier -->
            <section class="create-form__section">
                <label for="descriptionPet">Omschrijving dier</label>
                <textarea class="create-form__input create-form__input--big" name="descriptionPet" type="text-area" id="descriptionPet"></textarea>
            </section>

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
            <section class="create-form__section ">
                <label for="descriptionOwner">Omschrijving baasje</label>
                <textarea class="create-form__input create-form__input--big" name="descriptionOwner" type="text-area" id="descriptionOwner"></textarea>
            </section>



            <section class="create-form__section u-flex-v-center">
                <button class="create-form__button" type="submit">Verstuur</button>
            </section> 
        </form>
    </article>
@endsection
