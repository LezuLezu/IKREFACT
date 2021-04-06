<article class="animalCard a-popup" data-species-of-animal={{$animals->species}}>
    <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$animals->name}}</h2>
                <h4 class="gridCard__subheading">{{$animals->species}} </h4>
                <h4 class="gridCard__subheading">{{$animals->id}} </h4>

        </header>
        <figure class="animalCard__figure">
            <img class="animalCard__image" src="{{$animals->image}}" alt="{{$animals->name . ' ' . $animals->species}}">
        </figure>
        <section class="animalCard__text">
            <p>
                {{$animals->description}}
            </p>
        </section>
</article>