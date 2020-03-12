@extends('layout.main')

@section('title','Edit categorie')


@section('content')
<div class="container mt-5">
    <h1>Edit Categorie</h1>
    <form action="{{route('updateCategorie',$categorie->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="categorie">Categorie</label>
            @error('categorie')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control  @error('categorie')is-invalid @enderror" id="inputCategorie" name="categorie"
                value="{{$categorie->categorie}}">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection