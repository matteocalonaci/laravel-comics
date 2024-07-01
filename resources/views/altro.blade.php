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
    <h1 class="text-center p-1" style="color:red">{{"titolo_pg2"}}</h1>
    <hr style="color: white;">

    <div class="container">
    @foreach($personaggi as $personaggio)
        <div class="card">
            <li>{{$personaggio["main"]}}</li>
            <li>{{$personaggio["altro1"]}}</li>
            <li>{{$personaggio["altro2"]}}</li>
            <li>{{$personaggio["altro3"]}}</li>
            <li>{{$personaggio["altro4"]}}</li>
            <li>{{$personaggio["altro5"]}}</li>
        </div>
        @endforeach
   </div>
    </div>


</body>

</html>