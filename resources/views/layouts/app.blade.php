
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    {{-- <a class="navbar-brand"><img src="{{ asset('img/Navbar/Logo.jpg') }}" width="30px" height="30px">MovieFlix</a> --}}
                    <a class="navbar-brand"><img src="{{ asset('img/Navbar/Logo.jpg') }}" width="30px" height="30px"> <span class="movie">MOVIE</span> <span class="flix">FLIX</span></a>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">SEDANG TAYANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">SEGERA HADIR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">USER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content-app')
    </main>
</div>
</body>
</html>
