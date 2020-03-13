@extends('layout.main')

@section('title','Edit Avatar')


@section('content')
<div class="container mt-5">
    <h1>Edit Avatar</h1>
    <form action="{{route('updateAvatar',$avatar->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputAvatar">Nom</label>
            @error('nom')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control @error('nom')is-invalid @enderror" id="inputAvatar" name="nom"
                value="{{$avatar->nom}}">
        </div>
        <div class="form-group">
            <label for="inputAvatar">Image</label>
            @error('url_image')
                  <p class="text-danger">{{$message}}</p>
            @enderror
            @error('file_image')
                  <p class="text-danger">{{$message}}</p>
            @enderror
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-info my-2" id="buttonAvatarFile">Via Upload</button>
                      <input type="file" class="form-control-file  @error('file_image')is-invalid @enderror" id="inputAvatarFile" name="file_image">
      
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-info my-2" id="buttonAvatarUrl">Via URL</button>
                      <input type="url" class="form-control d-none @error('url_image')is-invalid @enderror" id="inputAvatarUrl" name="url_image" value="{{old('url_image',$avatar->image)}}">
                    </div>
                  </div>
          </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
