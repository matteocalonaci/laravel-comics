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
    <h1 class="text-center p-1" style="color:red">{{ $titolo_pg2 }}</h1>
    <hr style="color: white;">

    <div class="container">
        <div class="card">
        <h5>Personaggi <br> Oshi no ko</h5>
        <ul>
            @foreach ($personaggi_oshi_no_ko as $personaggio)
            <li>{{ $personaggio }}</li>
            @endforeach
        </ul>
        </div>

        <div class="card">
        <h5>Personaggi <br> Berserk</h5>
        <ul>
            @foreach ($personaggi_berserk as $personaggio)
            <li>{{ $personaggio }}</li>
            @endforeach
        </ul>
        </div>

        <div class="card">
        <h5>Personaggi The Climber</h5>
        <ul>
            @foreach ($personaggi_the_climber as $personaggio)
            <li>{{ $personaggio }}</li>
            @endforeach
        </ul>
        </div>

        <div class="card">
        <h5>Personaggi <br> 20th Century Boys</h5>
        <ul>
            @foreach ($personaggi_20th_century_boys as $personaggio)
            <li>{{ $personaggio }}</li>
            @endforeach
        </ul>
        </div>

        <div class="card">
        <h5>Personaggi <br> Monster</h5>
        <ul>
            @foreach ($personaggi_monster as $personaggio)
            <li>{{ $personaggio }}</li>
            @endforeach
        </ul>
        </div>

        <div class="card">
        <h5>Personaggi <br> Hirayasumi</h5>
        <ul>
            @foreach ($personaggi_hirayasumi as $personaggio)
            <li>{{ $personaggio }}</li>
            @endforeach
        </ul>
        </div>
        
    </div>


</body>

</html>