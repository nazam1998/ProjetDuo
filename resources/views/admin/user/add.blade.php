@extends('layout.main')

@section('title','Ajout User')


@section('content')
<div class="container mt-5">
    <h1>Ajout nouveau User</h1>
    <form action="{{route('saveUser')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputUser">Nom</label>
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control @error('name')is-invalid @enderror" id="inputUser" name="name">
        </div>

        <div class="form-group">
            <label for="inputUser">Age</label>
            @error('age')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="number" class="form-control @error('age')is-invalid @enderror" id="inputUser" name="age">
        </div>
        <div class="form-group">
            <label for="inputUser">Email</label>
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="email" class="form-control @error('email')is-invalid @enderror" id="inputUser" name="email">
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Avatar</legend>
                @error('id_avatar')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="col-sm-10 row">
                    @foreach ($avatars as $item)

                    <div class="form-check mx-3">
                        <input class="form-check-input" type="radio" name="id_avatar" id="gridRadios1"
                            value="{{$item->id}}">

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
