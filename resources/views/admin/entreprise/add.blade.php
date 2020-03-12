@extends('layout.main')

@section('title','Ajout Entreprise')


@section('content')
<div class="container mt-5">
    <h1>Ajout nouveau Entreprise</h1>
    <form action="{{route('saveEntreprise')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputEntreprise">Nom</label>
            @error('nom')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control @error('nom')is-invalid @enderror" id="inputEntreprise" name='nom'>
        </div>

        <div class="form-group">
            <label for="inputEntreprise">Nombre d'employé</label>
            @error('employe')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="number" class="form-control @error('employe')is-invalid @enderror" name='employe'>
        </div>
        <div class="form-group">
            <label for="inputEntreprise"></label>
            @error('logo')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="file" class="form-control-file @error('logo')is-invalid @enderror" name='logo'>
        </div>
        
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
