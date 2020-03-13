<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="{{route('home')}}">Navbar</a>
        <button class="bg-warning navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('avatar')}}">Avatar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('categorie')}}">Categorie</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('user')}}">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('image')}}">Image</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('role')}}">Role</a>
                </li>
                
            <li class="nav-item">
              <a class="nav-link" href="{{route('entreprise')}}">Entreprise</a>
              </li>
              
            
        </div>
      </nav>
    @yield('content')
    
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>