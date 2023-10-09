<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        /* Reduce the height of the navbar */
        .navbar {
            height: 60px; /* You can adjust the height as needed */
        }

        /* Reduce the font size of the navbar brand and links */
        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-size: 20px; /* You can adjust the font size as needed */
            font-weight: bold; /* Make it bold */
        }
        .navbar-nav .nav-link {
            font-family: 'Poppins', sans-serif;
            font-size: 12px; /* You can adjust the font size as needed */
            font-weight: bold; /* Make it bold */
        }

        /* Adjust padding for the navbar brand and links */
        .navbar-brand,
        .navbar-nav .nav-link {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        /* Change font family for "MovieFlix" to Poppins and make it bold */
        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: bold; /* Make it bold */
            padding-left: 10px; /* Add padding to the left of the text */
        }

        /* Change color for "Flix" */
        .navbar-brand .flix {
            color: blue; /* You can use the desired blue color code */
        }

        /* Remove spacing between "Movie" and "Flix" */
        .navbar-brand .movie {
            margin-right: -5px; /* Adjust the negative margin as needed */
        }
        .dropdown-menu{
            font-family: 'Poppins',sans-serif;

        }
    </style>
</head>
<body>
    {{-- @include('layouts.loading') --}}
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand"><img src="{{ asset('img/Navbar/Logo.jpg') }}" width="30px" height="30px"> <span class="movie">MOVIE</span> <span class="flix">FLIX</span></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>



            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    {{-- <a class="navbar-brand"><img src="{{ asset('img/Navbar/Logo.jpg') }}" width="30px" height="30px">MovieFlix</a> --}}
                    {{-- <a class="navbar-brand"><img src="{{ asset('img/Navbar/Logo.jpg') }}" width="30px" height="30px"> <span class="movie">MOVIE</span> <span class="flix">FLIX</span></a>
                </ul> --}}

                <!-- Right Side Of Navbar -->
              <!-- ... Bagian-bagian sebelumnya ... -->

<ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('beranda') }}">BERANDA</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ url('nowplaying') }}">SEDANG TAYANG</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ url('comingsoon') }}">SEGERA   HADIR</a>
    </li>
    @if (Auth::check())
    {{-- Tampilkan nama pengguna di atas profil --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img style="
                    width: 25px;
                    height: 25px;
                    border-radius: 100%;
                " src="
                @if (Auth::user()->fotoprofil === "default.jpg")
                    {{ asset('storage/' . Auth::user()->fotoprofil ) }}
                @else
                    {{ asset('storage/profile/' . Auth::user()->fotoprofil ) }}
                @endif
            " alt="Profile Image" class="user-profile-image">
        </a>
        <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
            <li class="dropdown-item" style="font-size: 13px; text-transform: capitalize; font-weight: 700">
                <i class="fas fa-user" style="padding-right: 5px"></i>  {{ Auth::user()->name }}
            </li>
             <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url('profile') }}"><i class="fas fa-sliders-h fa-fw"></i> Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-fw"></i> {{ __('Logout') }}</a></li>
        </ul>
    </li>
    @else
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
    @endguest
    @endif
</ul>

<!-- ... Bagian-bagian sesudahnya ... -->

            </div>
        </div>
    </nav>

    <main class="overflow-hidden">
        @yield('content-app')
    </main>
    @include('layouts.footer')

</div>
</body>
</html>
