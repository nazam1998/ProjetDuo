@extends('layout.main')

@section('title','Categorie')

@section('content')
    <table>
        <thead>
            <tr>
                <th colspan="4">Table Role</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Role</th>
    
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $item)
                
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->role}}</td>
            <td><a href="{{route('editRole',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
            <td><a href="{{route('deleteRole',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
            <div class="text-center">
                <a href="{{route('addRole')}}" class="btn btn-primary my-5 ">Ajouter un nouveau Role</a>
            </div>
@endsection