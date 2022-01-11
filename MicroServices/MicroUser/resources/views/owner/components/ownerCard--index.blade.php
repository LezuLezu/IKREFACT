<li class="a-popup u-list-style-none gridCard">
    <a href="/owner/{{$owner->id}}">
        <article >
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$owner->name}}</h2>
            </header>
            <figure class="gridCard__figure u-flex-v-center" >
                <img class="gridCard__image u-flex-v-center" src="{{$owner->image}}" alt="{{$owner->name}}">
            </figure>
  
            <section class="gridCard__buttonSection u-flex-v-center">
                <button class="gridCard__button u-flex-v-center" onclick="/owner/{{$owner->id}}">Meer over {{$owner->name}}</button>
            </section>

            
        </article>
    </a>
</li>
