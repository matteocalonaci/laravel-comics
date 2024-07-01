@extends('layouts.app')

    @section('main-content')
    <div class="card_container">

        @foreach($comics as $fumetto)
        <div class="card">
            <div class="img_container">
                <img src="{{$fumetto['img']}}" alt="">
            </div>
            <ul>
                <li style="text-align: center;">Titolo: {{$fumetto["title"]}}</li>
            </ul>
        </div>
        @endforeach
    </div>
    @endsection

</body>

</html>