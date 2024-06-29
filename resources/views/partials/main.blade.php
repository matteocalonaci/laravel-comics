<main>

<div class="card_container">
        <div class="card">
            <div class="img_container">
                <img src="/img/oshi_no_ko.jpg" alt="">
            </div>
            @foreach($fumetto1 as $fumetto)
            <li>{{$fumetto}}</li>
            @endforeach
        </div>
        <div class="card">
        <div class="img_container">
                <img src="/img/berserk.jpg" alt="">
            </div>
            @foreach($fumetto2 as $fumetto)
            <li>{{$fumetto}}</li>
            @endforeach
        </div>
        <div class="card">
        <div class="img_container">
                <img src="/img/the_climber.jpg" alt="">
            </div>
            @foreach($fumetto3 as $fumetto)
            <li>{{$fumetto}}</li>
            @endforeach
        </div>
        <div class="card">
        <div class="img_container">
                <img src="/img/20th_century_boys.jpg" alt="">
            </div>
            @foreach($fumetto4 as $fumetto)
            <li>{{$fumetto}}</li>
            @endforeach
        </div>
        <div class="card">
        <div class="img_container">
                <img src="/img/monster.jpg" alt="">
            </div>
            @foreach($fumetto5 as $fumetto)
            <li>{{$fumetto}}</li>
            @endforeach
        </div>
        <div class="card">
        <div class="img_container">
                <img src="/img/hirayasumi.jpg" alt="">
            </div>
            @foreach($fumetto6 as $fumetto)
            <li>{{$fumetto}}</li>
            @endforeach
        </div>



     
   </div>

    <a href="/about"> => pg 2</a>
</main>