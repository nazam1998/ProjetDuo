@extends('layout.main')

@section('title','Categorie')

@section('content')
    <table>
        <thead>
            <tr>
                <th colspan="4">Table Avatar</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Categorie</th>
    
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nom}}</td>
            <td>{{$item->image}}</td>
            <td><a href="{{route('editCategorie',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
            <td><a href="{{route('deleteCategorie',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection