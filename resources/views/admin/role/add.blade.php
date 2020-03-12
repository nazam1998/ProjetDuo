@extends('layout.main')

@section('title','Ajout Role')


@section('content')
<div class="container mt-5">
    <h1>Ajout nouveau Role</h1>
    <form action="{{route('saveRole')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputRole">Role</label>
            @error('nom')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control-file  @error('categorie')is-invalid @enderror" id="inputRole"
            name="role">

        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
        
</div>
@endsection