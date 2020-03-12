@extends('layout.main')

@section('title','Ajout Avatar')


@section('content')
<div class="container mt-5">
    <h1>Ajout nouveau Avatar</h1>
    <form action="{{route('updateAvatar',$avatar->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputAvatar">Nom</label>
            @error('nom')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control  @error('nom')is-invalid @enderror" id="inputAvatar" name="nom"
                value="{{$avatar->nom}}">
        </div>
        <div class="form-group">
            <label for="inputAvatar">Image</label>
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="file" class="form-control-file  @error('image')is-invalid @enderror" id="inputAvatar"
                name="image">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
