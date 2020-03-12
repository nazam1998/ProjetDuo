@extends('layout.main')

@section('title','User')

@section('content')
<div class="container text-center">

    <table>
        <thead>
            <tr>
                <th colspan="7">Table User</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Age</th>
                <th>Email</th>
                <th>Role</th>
                <th>Entreprise</th>
                <th>Avatar</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->id_rolel}}</td>
                <td>{{$item->id_entreprise}}</td>
                <td><img src="{{asset('storage/'.$avatars->where('id',$item->id_avatar)->first()->image)}}" class="img-fluid" alt=""></td>
                <td><a href="{{route('editUser',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteUser',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
<a href="{{route('addUser')}}" class="btn btn-primary my-5">Ajouter un nouveau User</a>
</div>

    @endsection