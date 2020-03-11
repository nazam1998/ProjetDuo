@extends('layout.main')

@section('title','Ajout User')


@section('content')
<div class="container mt-5">
    <h1>Ajout nouveau User</h1>
    <form action="{{route('saveUser')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputUser">Nom</label>
            <input type="text" class="form-control" id="inputUser" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="inputUser">Age</label>
            <input type="number" class="form-control" id="inputUser" name="age" value="{{$user->age}}">
        </div>
        <div class="form-group">
            <label for="inputUser">Email</label>
            <input type="email" class="form-control" id="inputUser" name="email" value="{{$user->email}}">
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Avatar</legend>
                <div class="col-sm-10 row">
                    @foreach ($avatars as $item)

                    <div class="form-check mx-3">
                        @if ($item->id==$user->id_avatar)

                        <input class="form-check-input" type="radio" name="id_avatar" id="gridRadios1"
                            value="{{$item->id}}" checked>
                        @else
                        <input class="form-check-input" type="radio" name="id_avatar" id="gridRadios1"
                            value="{{$item->id}}">
                        @endif
                        <img src="{{asset('storage/'.$item->image)}}" alt="" class="avatar">
                    </div>
                    @endforeach

                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection