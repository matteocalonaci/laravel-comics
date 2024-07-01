<main>

<div class="card_container">
    

    @foreach($comics as $fumetto)
        <div class="card">
            <div class="img_container">
                <img src="{{$fumetto['img']}}" alt="">
            </div>
            <ul>
            <li>Titolo: {{$fumetto["title"]}}</li>
            <li>Autore: {{$fumetto["Autore"]}}</li>
            <li>Prezzo: {{$fumetto["price"]}}</li>
            </ul>
        </div>
        @endforeach
   </div>

    <a href="/about"> => pg 2</a>
</main>