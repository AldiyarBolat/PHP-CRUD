<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-3">
    <div class="container">
    <a class="navbar-brand" href="{{ route('goods.index') }}">Товары</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('goods.index') }}">Главная стр</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('goods.index') }}">Товары</a>
        </li>
         -->
        
        
        <!-- </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
    </div>
    </nav>

    <div class="container">
       @yield('content')
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    $(function() {
        $('.alert-success').fadeOut(3000);
    });
    </script>
</body>
</html>