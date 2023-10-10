<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- <link rel="stylesheet" href="{{create-detailcomingsoon.css}}"> --}}
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/admin/create-film.css') }}">
    {{-- @include('layouts.cdn') --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<style>
    .btn-light {
                    background-color: #b1b1c2;
                    /* Warna latar belakang tombol */
                    color: #121111;
                    /* Warna teks tombol */
                    transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
                    /* Efek transisi untuk bayangan, transformasi, dan warna teks */
                    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                    /* Bayangan awal */
                }

                .btn-light:hover {
                    background-color: #fff8f8;
                    /* Warna latar belakang saat dihover */
                    color: #576069;
                    /* Warna teks saat dihover */
                    transform: scale(1.1);
                    /* Perubahan ukuran saat dihover */
                    box-shadow: 4px 4px 10px rgba(62, 62, 62, 0.5);
                    /* Bayangan saat dihover */
                }
                .navbar {
    background: linear-gradient(90deg, #007bff, #0056b3);
    padding: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    animation: fadeIn 1s; /* Animasi saat dimuat */
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.nav-list {
    list-style: none;
    padding: 0;
    display: flex;
}

.nav-item {
    margin-right: 20px;
}

.nav-link {
    text-decoration: none;
    color: white;
    font-weight: bold;
    transition: color 0.3s;
}

.nav-link:hover {
    color: #ffcc00;
}

.bi {
    margin-right: 5px;
    font-size: 1.2rem;
}
.title-name-admin {
            background-color: #333; /* Warna latar belakang */
            padding: 10px; /* Ruang padding */
            border-radius: 5px; /* Sudut yang membulatkan elemen */
            text-align: center; /* Pusatkan teks */
        }

        /* Style untuk teks judul */
        .admin-names {
            font-size: 17px; /* Ukuran teks */
            font-weight: bold; /* Tebalkan teks */
            text-transform: uppercase; /* Ubah teks menjadi huruf besar */
            margin: 0; /* Hapus margin bawaan */
            color: #fff; /* Warna teks putih */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Efek bayangan teks */
        }
        .bg-dark {
                    background-color: #b2b2b5;
                    /* Warna latar belakang tombol */
                    color: #ffffff;
                    /* Warna teks tombol */
                    transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
                    /* Efek transisi untuk bayangan, transformasi, dan warna teks */
                    box-shadow:  linear-gradient(145deg, rgba(0,0,0,1) 0%, rgba(8,27,41,1) 100%);
                     /* Efek bayangan saat hover */

                }

                .bg-dark:hover {
                    background-color: #ffffff;
                    /* Warna latar belakang saat dihover */
                    color: #343a40;
                    /* Warna teks saat dihover */
                    transform: scale(1.1);
                    /* Perubahan ukuran saat dihover */
                    box-shadow: rgb(255, 255, 255) 0px 3px 8px;
                    /* Bayangan saat dihover */
                }
</style>

<body>
    <div id="app" class="d-flex" style="position: absolute; top:0;left:0;bottom:0;">
        <div class="d-flex flex-column flex-shrink-0 p-3"
            style="width: 280px; height: auto; background-color: #111111;">
            <a href="{{ route('admin.index') }}"
                class="d-flex w-100 justify-content-center py-2 gap-2 align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img width="37" height="49" src="{{ asset('img/LOGO.png') }}" alt="Logo">
                <h3 class="movie-flix fs-4 text-white">Movie<span style="color: #0007AC;">Flix</span></h3>
            </a>
            <hr style="color: #f4f4f4;">

            <div class="logout-button d-flex justify-content-between px-3 align-items-center">
                <div class="d-flex align-items-center">
                    <img class="rounded-circle me-3" style="width: auto; height: 40px;"
                        src="{{ asset('img/user.png') }}" alt="">
                    <div class="title-name-admin mt-2">
                        <h4 class="text-white admin-names">Admin</h4>
                        {{-- <p class="text-white admin-name">{{ Auth::user()->name }}</p> --}}
                    </div>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a class="bg-dark btn" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="bi bi-box-arrow-right text-white fs-4"></i></a>
            </div>

            <hr style="color: #f4f4f4;">
            <div class="mb-2">
                <ul class="nav nav-pills flex-column mb-2">
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}"
                            class="nav-link text-white {{ request()->is('admin') ? 'active' : '' }}"
                            aria-current="page">
                            <i class="bi bi-pie-chart-fill me-2"></i> Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('daftarfilm') }}"
                            class="nav-link text-white text-decoration-none rounded me-2 {{ request()->is('daftarfilm') ? 'active' : '' }}">
                            <i class="bi bi-camera-video-fill"></i> Daftar Film
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/konfirmasi_ticket"
                            class="nav-link text-white text-decoration-none rounded me-2 {{ request()->is('konfirmasi_ticket') ? 'active' : '' }}">
                            <i class="bi bi-ui-radios"></i>  Konfirmasi Tiket
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('trending_film') }}"
                            class="nav-link text-white text-decoration-none rounded me-2 {{ request()->is('trending_film') ? 'active' : '' }}">
                            <i class="fas fa-trophy"></i> Trending Film <!-- Mengganti ikon dengan ikon trofi -->
                        </a>
                    </li>

                </ul>
            </div>
            <hr>
            <a class="text-center text-decoration-none btn btn-light" href="{{ url('/') }}">
                <i class="fas fa-home"></i> Beranda
            </a>


        </div>
        <main>
            <div class="d-flex">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
