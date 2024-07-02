<header>
    <div class="links">
    <a class="@if (Route::currentRouteName() == 'home') active @endif" href="{{ route('home')}}" >HOME</a>
    <a class="@if (Route::currentRouteName() == 'comics') active @endif" href="{{ route('comics')}}" >COMICS</a>
    <a class="@if (Route::currentRouteName() == 'personaggi') active @endif" href="{{ route('personaggi')}}">PERSONAGGI</a>
    </div>
    <h1 class="text-center p-1" style="color:red"></h1>
    <span>Attualmente sei in: {{Route::currentRouteName()}}</span>
    <hr style="color: white;">
</header>