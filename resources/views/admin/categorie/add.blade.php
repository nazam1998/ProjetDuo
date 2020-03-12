@extends('layout.main')

@section('title','Ajout Categorie')


@section('content')
<div class="container mt-5">
    <h1>Ajout nouveau Categorie</h1>
    <form action="{{route('saveCategorie')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputCategorie">Categorie</label>
            @error('nom')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control-file  @error('categorie')is-invalid @enderror" id="inputCategorie"
            name="categorie">

        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
        
</div>
@endsection