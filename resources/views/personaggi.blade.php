
@extends('layouts.app')


@section('main-content')
<h5 class="text-center p-1" style="color:red">{{$titolo_pg2}}</h5>

<div class="container"  style="margin-top: 7.4rem; margin-bottom: 7.4rem;">
    @foreach($personaggi as $personaggio)
        <div class="card">
            
            <h5>{{$personaggio["title"]}}</h5>
            <li>{{$personaggio["main"]}}</li>
            <li>{{$personaggio["altro1"]}}</li>
            <li>{{$personaggio["altro2"]}}</li>
            <li>{{$personaggio["altro3"]}}</li>
            <li>{{$personaggio["altro4"]}}</li>
            <li>{{$personaggio["altro5"]}}</li>
        </div>
        @endforeach
   </div>
    
@endsection