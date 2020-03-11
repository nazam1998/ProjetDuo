@extends('layout.main')

@section('title','Ajout Avatar')


@section('content')
<div class="container mt-5">
<h1>Ajout nouveau Avatar</h1>
  <form action="{{route('saveAvatar')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="inputAvatar">Nom</label>
      <input type="text" class="form-control" id="inputAvatar" name="nom">
    </div>
    <div class="form-group">
      <label for="inputAvatar">Image</label>
      <input type="file" class="form-control-file" id="inputAvatar" name="image">
    </div>
    
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
@endsection