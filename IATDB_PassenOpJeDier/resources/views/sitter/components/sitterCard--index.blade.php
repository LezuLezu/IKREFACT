<li class="a-popup u-list-style-none gridCard">
    <a href="/sitter/{{$sitter->id}}">
        <article >
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$sitter->name}}</h2>
            </header>
            <figure class="gridCard__figure u-flex-v-center" >
                <img class="gridCard__image u-flex-v-center" src="{{$sitter->image}}" alt="{{$sitter->name}}">
            </figure>
  
            <section class="gridCard__buttonSection u-flex-v-center">
                <button class="gridCard__button u-flex-v-center" onclick="/sitter/{{$sitter->id}}">Meer over {{$sitter->name}}</button>
            </section>

            
        </article>
    </a>
</li>
