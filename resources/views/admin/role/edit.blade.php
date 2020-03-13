@extends('layout.main')

@section('title','Edit role')


@section('content')
<div class="container mt-5">
    <h1>Edit role</h1>
    <form action="{{route('updateRole',$role->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="role">Role</label>
            @error('role')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" class="form-control  @error('role')is-invalid @enderror" id="inputRole" name="role"
                value="{{$role->role}}">
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection