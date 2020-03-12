@extends('layout.main')

@section('title','Ajout Avatar')


@section('content')
<div class="container mt-5">
<h1>Ajout nouveau Image</h1>
  <form action="{{route('saveImage')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="inputImage">Nom</label>
      @error('nom')
            <p class="text-danger">{{$image}}</p>
            @enderror
      <input type="text" class="form-control  @error('nom')is-invalid @enderror" id="inputImage" name="nom">
    </div>
    
    <div class="form-group">
      <label for="inputImage">Image</label>
      @error('image')
            <p class="text-danger">{{$image}}</p>
            @enderror
      <input type="file" class="form-control-file @error('image')is-invalid @enderror" id="inputImage" name="image">
    </div>
    <label for="id_categorie">categorie</label>
          <select name="id_categorie" id="id_categorie">
      
              @foreach ($categories as $item)
          <option value="{{$item->id}}">{{$item->categorie}}</option>
                  
              @endforeach
      
          </select>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
@endsection