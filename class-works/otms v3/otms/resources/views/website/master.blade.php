<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
    <title>OTMS @yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">OTMS</a>

        <ul class=" navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Training Category</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('training.category')}}" class="dropdown-item">Web Design</a></li>
                    <li><a href="{{route('training.category')}}" class="dropdown-item">Web Development</a></li>
                </ul>

            </li>
            <li><a href="{{route('training.all')}}" class="nav-link">All Training</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            <li><a href="{{route('login-registration')}}" class="nav-link">Login/Registration</a></li>

        </ul>
    </div>
</nav>

@yield('body')

<footer class="py-5 bg-dark ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body h-100">
                    <h3>OTMS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi assumenda dicta eaque ex hic in iste laboriosam modi nihil numquam, odit quas quasi quod saepe soluta tempore vero voluptates!</p>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card card-body h-100">
                    <h3>Popular Training</h3>
                    <ul class="navbar-nav">
                        <li><a href="" class="nav-link">Mobile App Development</a></li>
                        <li><a href="" class="nav-link">PHP With laravel framework</a></li>
                        <li><a href="" class="nav-link">Responsive Web Design</a></li>
                        <li><a href="" class="nav-link">Professional Digital Marketing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body h-100">
                    <h3>Contact Us</h3>
                    <address>
                        House No - 420, Road No - Dhanmondi, Dhaka - 1215.
                    </address>
                    <h3>Follow US</h3>
                    <ul class="nav">
                        <li class="nav-link" ><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li class="nav-link" ><a href=""><i class="fa-brands fa-square-twitter"></i></a></li>
                        <li class="nav-link" ><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="text-white mt-4"/>

        <div class="row">
            <div class="col">
                <p class="text-white text-center mb-0">copyright@basis_seip_php_batch_13 all rights reserved</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('/')}}website/js/jquery.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
</body>
</html>
