<article class="animalCard a-popup" data-species-of-animal={{$animals->species}}>
        <figure class="animalCard__figure">
            <img class="animalCard__image" src="{{$animals->image}}" alt="{{$animals->name . ' ' . $animals->species}}">
        </figure>
        <!-- <section class="animalCard__text">
            <p>
                {{$animals->description}}
            </p>
        </section> -->
</article>