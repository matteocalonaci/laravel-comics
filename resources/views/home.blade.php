<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- <link rel="stylesheet" href=".../public/style.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<!-- Styles -->
<link href="/css/style.css" rel="stylesheet">

<body style="background-color: rgb(0,8,47);">
    <h1 class="text-center p-1" style="color:red">{{ $titolo }}</h1>
    <hr style="color: white;">

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

</body>

</html>