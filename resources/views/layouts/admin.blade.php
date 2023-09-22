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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{URL::asset('css/admin/admin_sidebar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/admin/dashboard_admin.css')}}">

    {{-- ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

 {{-- <link rel="stylesheet" href="{{create-detailcomingsoon.css}}"> --}}
 <link rel="stylesheet" href="{{ URL::asset('css/admin/create-film.css') }}">
 {{-- @include('layouts.cdn') --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 100vh; background-color: #111111;">
            <a href="{{route('admin.index')}}" class="d-flex w-100 justify-content-center py-2 gap-2 align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <img width="37" height="49" src="{{asset('img/LOGO.png')}}" alt="Logo">
              <h3 class="movie-flix fs-4 text-white">Movie<span style="color: #0007AC;">Flix</span></h3>
            </a>
            <hr style="color: #f4f4f4;">

            <div class="logout-button d-flex justify-content-between px-3 align-items-center">
              <div class="d-flex align-items-center">
                <img class="rounded-circle me-3" style="width: auto; height: 40px;" src="{{asset('img/user.png')}}" alt="">
                <div class="title-name-admin mt-2">
                  <p class="text-white admin-names">Admin</p>
                  <p class="text-white admin-name">{{ Auth::user()->name }}</p>
                </div>
              </div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              <a class="bg-dark btn" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right text-white fs-4"></i></a>
            </div>

            <hr style="color: #f4f4f4;">
            <div class="mb-2">
              <ul class="nav nav-pills flex-column mb-2">
                <li class="nav-item">
                  <a href="{{route('admin.index')}}" class="nav-link text-white {{ request()->is('admin') ? 'active' : '' }}" aria-current="page">
                    <i class="bi bi-pie-chart-fill me-2"></i>
                    Dashboard
                  </a>
                </li>
              </ul>
            </div>
            <div class="dropdown">
              <ul class="list-unstyled ps-0 mb-3 rounded" style="background-color: #00284D;">
                <li class="mb-1">
                  <button class="btn text-uppercase w-100 btn-toggle align-items-center rounded collapsed text-white" data-bs-toggle="collapse" data-bs-target="#tiket-online-collapse" aria-expanded="true">
                    <i class="bi bi-ticket-detailed-fill me-2"></i> Tiket Online
                  </button>
                  <div class="collapse" id="tiket-online-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1  justify-content-center px-3">
                      <li><a href="/konfirmasi-ticket" class="text-white text-decoration-none rounded me-2 nav-link {{ request()->is('admin') ? 'active' : '' }}"><i class="bi bi-ui-radios"></i> Proses Konfirmasi Tiket Online</a></li>
                      <li><a href="#" class="text-white text-decoration-none rounded me-2 nav-link"><i class="bi bi-database"></i> Data Tiket Online</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
              <ul class="list-unstyled ps-0 mb-3 rounded" style="background-color: #00284D;">
                <li class="mb-1">
                  <button class="btn text-uppercase w-100 btn-toggle align-items-center rounded collapsed text-white" data-bs-toggle="collapse" data-bs-target="#tiket-offline-collapse" aria-expanded="true">
                    <i class="bi bi-ticket-detailed-fill me-2"></i> Tiket Offline
                  </button>
                  <div class="collapse" id="tiket-offline-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1  justify-content-center px-3">
                      <li><a href="#" class="text-white text-decoration-none rounded me-2"><i class="bi bi-cart2"></i> Pembelian Tiket Offline</a></li>
                      <li><a href="#" class="text-white text-decoration-none rounded me-2"><i class="bi bi-database"></i> Data Tiket Offline</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
              <ul class="list-unstyled ps-0 mb-3 rounded" style="background-color: #00284D;">
                <li class="mb-1">
                  <button class="btn text-uppercase w-100 btn-toggle align-items-center rounded collapsed text-white" data-bs-toggle="collapse" data-bs-target="#film" aria-expanded="true">
                    <i class="bi bi-film me-2"></i> Film
                  </button>
                  <div class="collapse" id="film">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1  justify-content-center px-3">
                      <li><a href="#" class="text-white text-decoration-none rounded me-2"><i class="bi bi-megaphone"></i> Coming Soon</a></li>
                      <li><a href="#" class="text-white text-decoration-none rounded me-2"><i class="bi bi-camera-video-fill"></i> Now Playing</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <hr>
        </div>

        <main>
          <div class="d-flex">
            @yield('content')
          </div>
        </main>
    </div>
</body>
</html>
