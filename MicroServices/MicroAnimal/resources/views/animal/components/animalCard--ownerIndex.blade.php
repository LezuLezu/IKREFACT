<li class="gridCard a-popup u-list-style-none js--animal-list" data-species-of-animal={{$animal->species}}>
        <article >
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$animal->name}}</h2>
            </header>
            <figure class="gridCard__figure u-flex-v-center" >
                <img class="gridCard__image u-flex-v-center" src="{{$animal->image}}" alt="{{$animal->name . ' ' . $animal->species}}">
            </figure>            

            <section class="gridCard__buttonSection gridCard__buttonSection--twoButtons u-display-block">
                <button class="gridCard__button u-flex-v-center" onclick="window.location.href='/animal/{{$animal->id}}'">Meer over {{$animal->name}}</button>
                <button class="gridCard__button u-flex-v-center" onclick="window.location.href='/application/{{$animal->id}}'">Aanvragen bekijken</button>
            </section>
        
            

        </article>
</li>
