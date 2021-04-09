<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/css/main.css">
 
    <title>@yield('title')</title>

    <script src="/js/main.js" defer></script>
</head>
    <nav class="navbar" id="navbar">
        <h1 class="navbar__heading">Pas op je Huisdier</h1>
        <ul class="navbar__list">
            @if(Auth::user()->role=="Baasje")
                <li class="navbar__item u-flex-v-center">
                    <a  class="navbar__link " href="/animals"> Dieren </a>
                </li>
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/sitters"> Oppassers </a>
                </li>
                <li  class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/owners"> Baasjes </a>
                </li>
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/createpet"> Nieuw dier profiel </a>
                </li >
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link " href="/createsitter"> Nieuw oppasprofiel </a>
                </li> 
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link " href="/owner/{{Auth::user()->id}}/animals"> Mijn dieren </a>
                </li> 
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link " href="/logout"> Log uit </a>
                </li> 
            @elseif(Auth::user()->role=="Admin")
                <li class="navbar__item u-flex-v-center">
                    <a  class="navbar__link " href="/animals"> Dieren </a>
                </li>
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/sitters"> Oppassers </a>
                </li>
                <li  class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/owners"> Baasjes </a>
                </li>
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/createpet"> Nieuw dier profiel </a>
                </li >
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link " href="/createsitter"> Nieuw oppasprofiel </a>
                </li> 
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link " href="/admin"> Admin </a>
                </li> 
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link " href="/logout"> Log uit </a>
                </li> 
            
            @else
                <li class="navbar__item u-flex-v-center">
                    <a  class="navbar__link " href="/animals"> Dieren </a>
                </li>
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/sitters"> Oppassers </a>
                </li>
                <li  class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/owners"> Baasjes </a>
                </li>
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link" href="/createpet"> Nieuw dier profiel </a>
                </li >
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link " href="/createsitter"> Nieuw oppasprofiel </a>
                </li> 
                <li class="navbar__item u-flex-v-center">
                    <a class="navbar__link " href="/logout"> Log uit </a>
                </li> 
            @endif

        </ul>       
        <div class="menu-toggle">
            <div class="hamburger"></div>
        </div>
    </nav>
    <body>
        @yield('content')
    </body>
</html>