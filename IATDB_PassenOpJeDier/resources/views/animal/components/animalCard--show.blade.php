<article class="showCard  a-popup" data-species-of-animal={{$animals->species}}>
    <header class="showCard__header u-flex-v-center">
                <h2 class="showCard__heading">{{$animals->name}}</h2>
        </header>
        <figure class="showCard__figure u-flex-v-center">
            <img class="showCard__image" src="{{$animals->image}}" alt="{{$animals->name . ' ' . $animals->species}}">
        </figure>
        <section class="showCard__text u-flex-v-center">
            <p>
                {{$animals->description}}
            </p>
        </section>

        <section class="showCard__buttonSection u-flex-v-center">
            <button class="showCard__button showCard__button-pick u-flex-v-center" onclick="">Op {{$animals->name}} passen</button>
            <button class="showCard__button showCard__button-back u-flex-v-center" onclick="window.location.href='/animal/{{$animals->id}}/owner'">Baasje van {{$animals->name}} bekijken</button>
            <button class="showCard__button showCard__button-back u-flex-v-center" onclick="window.location.href='/animals'">Terug naar overzicht</button>
        </section>

</article>