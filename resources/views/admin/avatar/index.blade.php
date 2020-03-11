@extends('layout.main')

@section('title','Avatar')

@section('content')
<div class="container text-center">

    <table>
        <thead>
            <tr>
                <th colspan="5">Table Avatar</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($avatars as $item)
            
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nom}}</td>
                <td>{{$item->image}}</td>
                <td><a href="{{route('editAvatar',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteAvatar',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @endsection