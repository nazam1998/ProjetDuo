@extends('layout.main')

@section('title','Ajout User')


@section('content')
<div class="container mt-5">
    <h1>Editer User</h1>
    <form action="{{route('updateUser',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputUser">Nom</label>
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control @error('name')is-invalid @enderror" id="inputUser" name="name"
                value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="inputUser">Age</label>
            @error('age')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="number" class="form-control @error('age')is-invalid @enderror" id="inputUser" name="age"
                value="{{$user->age}}">
        </div>
        <div class="form-group">
            <label for="inputUser">Email</label>
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="email" class="form-control @error('email')is-invalid @enderror" id="inputUser" name="email"
                value="{{$user->email}}">
        </div>

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Avatar</legend>
                @error('id_avatar')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="col-sm-10 row">
                    @foreach ($avatars as $item)

                    <div class="form-check mx-3">
                        @if ($item->id==$user->id_avatar)

                        <input class="form-check-input" type="radio" name="id_avatar" id="gridRadios1"
                            value="{{$item->id}}" checked>
                        @else

                        <input class="form-check-input" type="radio" name="id_avatar" id="gridRadios1"
                            value="{{$item->id}}">
                        @endif
                        <img src="{{asset('storage/'.$item->image)}}" alt="" class="avatar">
                    </div>
                    @endforeach

                </div>
            </div>
        </fieldset>
        <div>

            <label for="id_role">Role</label>
            <select name="id_role" id="id_role">
        
                @foreach ($roles as $item)
                @if ($item->id==$user->id_role)
                <option value="{{$item->id}}" selected>{{$item->role}}</option>
                @else
                <option value="{{$item->id}}">{{$item->role}}</option>

                @endif
            
                    
                @endforeach
        
            </select>
        </div>
        <div>
            <label for="id_entreprise">Entreprise</label>
            <select name="id_entreprise" id="id_entreprise">
        
                @foreach ($entreprises as $item)
                @if ($item->id==$user->id_entreprise)
                <option selected value="{{$item->id}}">{{$item->nom}}</option>

                @else
                <option value="{{$item->id}}">{{$item->nom}}</option>

                @endif
                    
                @endforeach
        
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
