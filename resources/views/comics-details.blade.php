@extends('layouts.app')

@section('title', 'Lista Fumetti')

@section('content')
    <h1>Lista fumetti</h1>

    <div class="cardContainer">
        @foreach ($comics as $indice => $fumetto)
            <div class="card">
                {{-- Bonus: posso usare route("qualcosa") ?? --}}
                <a href="/comics/{{ $indice }}">
                    <img src="{{ $fumetto['img'] }}" alt="{{ $fumetto['title'] }}" />
                </a>
            </div>
        @endforeach
    </div>
@endsection