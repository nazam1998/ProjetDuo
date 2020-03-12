@extends('layout.main')

@section('title','edit Image')


@section('content')
<div class="container mt-5">
    <h1>Ajout nouveau Image</h1>
    <form action="{{route('updateImage',$image->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputImage">Nom</label>
            @error('nom')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control  @error('nom')is-invalid @enderror" id="inputImage" name="nom"
                value="{{$image->nom}}">
        </div>
        <div class="form-group">
            <label for="inputImage">Image</label>
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="file" class="form-control-file  @error('image')is-invalid @enderror" id="inputImage"
                name="image">
        </div>
           <label for="id_categorie">categorie</label>
            <select name="id_categorie" id="id_categorie">
        
                @foreach ($categories as $item)
                @if ($item->id == $image->id_categorie)
                    
                <option selected value="{{$item->id}}">{{$item->categorie}}</option>
                @else
                <option value="{{$item->id}}">{{$item->categorie}}</option>

                @endif
                    
                @endforeach
        
            </select>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
