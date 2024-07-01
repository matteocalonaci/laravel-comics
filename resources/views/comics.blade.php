@extends('layouts.app')


@section('main-content')
<div class="card_container">  
@foreach($comics as $fumetto)
        <div class="card" style="height: 42rem;">
            <div class="img_container">
                <img src="{{$fumetto['img']}}" alt="">
            </div>
            <ul>
            <li>Titolo: {{$fumetto["title"]}}</li>
            <li>Autore: {{$fumetto["Autore"]}}</li>
            <li>Descrizione: {{$fumetto["Descrizione"]}}</li>
            <li class="price">Prezzo: {{$fumetto["price"]}}</li>
            </ul>
        </div>
        @endforeach
</div>
    
@endsection
