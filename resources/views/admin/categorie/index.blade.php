@extends('layout.main')

@section('title','Categorie')

@section('content')
<div class="container text-center">

    <table>
        <thead>
            <tr>
                <th colspan="4">Table Catégorie</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Categorie</th>

                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)

            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->categorie}}</td>
                <td><a href="{{route('editCategorie',$item->id)}}"><button class="btn btn-warning">Edit</button></a>
                </td>
                <td><a href="{{route('deleteCategorie',$item->id)}}"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{route('addCategorie')}}" class="btn btn-primary my-5 ">Ajouter une nouvelle Catégorie</a>
    </div>
</div>
@endsection
