@extends('layout.main')

@section('title','Entreprise')

@section('content')
<div class="container text-center">

    <table>
        <thead>
            <tr>
                <th colspan="7">Table Entreprise</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Nombre Maximum D'Employés</th>
                <th>Logo</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entreprises as $item)
            
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nom}}</td>
                <td>{{$item->employe}}</td>
                <td><img src="{{asset('storage/'.$item->logo)}}" class="img-fluid" alt=""></td>
                <td><a href="{{route('editEntreprise',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteEntreprise',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
<a href="{{route('addEntreprise')}}" class="btn btn-primary my-5">Ajouter un nouveau Entreprise</a>
</div>

    @endsection