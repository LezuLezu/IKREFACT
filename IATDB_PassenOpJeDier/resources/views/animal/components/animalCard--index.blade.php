<li class="a-popup u-list-style-none gridCard" data-species-of-animal={{$animal->species}}>
    <!-- <a href="/animal/{{$animal->id}}"> -->
        <article >
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$animal->name}}</h2>
                <h4 class="gridCard__subheading">{{$animal->species}} </h4>
            </header>
            <!-- <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$animal->image}}" alt="{{$animal->name . ' ' . $animal->species}}">
            </figure> -->
            <!-- <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">
                    {{$animal->description}}
                </p>   
            </section> -->
        </article>
    <!-- </a> -->
</li>
