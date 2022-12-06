<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <div class="container">
        <a href="" class="navbar-brand">My Laravel</a>
        <button type="button" class="navbar-toggler" data-bs-toggler="collapse">
            <i class="navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li><a href="{{route('service')}}" class="nav-link">Service</a></li>
                <li><a href="{{route('series')}}" class="nav-link">Series</a></li>
            </ul>
        </div>
    </div>

</nav>

@yield('body')

<script src="{{asset('/')}}js/jquery.js"></script>
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
