@extends('layout.main')
@section('title','Accueil')
@section('content')
<div class="backgroundWelcome">

    <div class="container-lg text-center">
        <a href="http://www.developpeurfullstack.com/"><img src="{{asset('/img/welcome.png')}}" alt="" class="img-fluid animated heartBeat delay-1s"></a>
        </div>
        <h1 class="title text-center animated rollIn delay-2S">Less is more</h1>
</div>


@endsection