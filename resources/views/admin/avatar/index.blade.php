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
                <td><img src="{{asset('storage/'.$item->image)}}" class="img-fluid" alt=""></td>
                <td><a href="{{route('editAvatar',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteAvatar',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
   @if (count($avatars)<5)
   <a href="{{route('addAvatar')}}" class="btn btn-primary my-5">Ajouter un nouveau Avatar</a>
   @else 
   <span class="text-danger">Désolé! Vous avez atteint la limite d'avatar ajoutable</span>
   @endif
</div>

    @endsection