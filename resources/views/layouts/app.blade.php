<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('cars.name', 'LeasingCars') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="height:80px;">
            <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{  __('Home') }}
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/about" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        About Us
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/about">About Our Company</a></li>
                                        <li><a class="dropdown-item" href="{{ route('cars.index') }}">About Cars</a></li>
                                        <li><a class="dropdown-item" href="{{ route('cars.create') }}">Create your cars</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                 </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/posts">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/servises">Servises</a>
                                </li>
                                
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                               
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <main class="py-4">
                @include('inc.massages')
                @yield('content')
            </main>
        </div>
        

        <footer>
        <div class="container p-2 mt-4">
            <div class="row">
                <div class="col col-xs-12 col-sm-12 col-md-3">

                    <div class="logo">
                        <h2>AUTOLEASING</h2>
                    </div>

                </div>

                <div class="col col-xs-12 col-sm-12 col-md-9">

                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="list">
                                        <h5>Prestige auto FL,LLC </h5>
                                        <ul>
                                            <li><a href="#">7901 4th St. N STE 4935</a></li>
                                            <li><a href="#">St. Petersburg, FL 33702</a></li>
                                            <li><a href="#">855-4LEASING</a></li>
                                            <li><a href="#">855-453-2746</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="list">
                                        <h5>Business Hours</h5>
                                        <ul class="list">
                                            <li><a href="#">Monday-Saturday</a></li>
                                            <li><a href="#">10 AM- 7 PM</a></li>
                                            <li><a href="#">Sunday: Closed</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="list">
                                        <h5>Join us on social</h5>
                                        <div class="logo">

                                            <div class="row">
                                                <div class="col">
                                                    <i class="bi bi-whatsapp"></i>
                                                </div>
                                                <div class="col">
                                                    <i class="bi bi-facebook"></i>
                                                </div>
                                                <div class="col">
                                                    <i class="bi bi-telegram"></i>
                                                </div>
                                                <div class="col">
                                                    <i class="bi bi-instagram"></i>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </footer>

                </div>

            </div>

            <div class="row mt-4">
                <div class="col-sm-6 ">
                    <p class="copy">Company &copy; Copyright 2022. </p>
                </div>

                <div class="col-sm-6 d-flex justify-content-end">
                    <p class="copy">For more information:</p>
                </div>
            </div>
        </div>
    </footer>

    </div>
</body>
</html>
