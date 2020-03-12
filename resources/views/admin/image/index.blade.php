@extends('layout.main')

@section('title','image')

@section('content')
<div class="container text-center">

    <table>
        <thead>
            <tr>
                <th colspan="6">Table Image</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Image</th>
                <th>id_categorie</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $item)
            
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nom}}</td>
                <td><img src="{{asset('storage/'.$item->image)}}" class="img-fluid" alt=""></td>
                <td>{{$item->id_categorie}}</td>
                <td><a href="{{route('editImage',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteImage',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

   <a href="{{route('addImage')}}" class="btn btn-primary my-5">Ajouter un nouveau Avatar</a>
</div>

    @endsection