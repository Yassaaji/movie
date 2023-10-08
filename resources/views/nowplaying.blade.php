@extends('layouts.app')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Now Playing</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/nowplaying.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

    body {
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        color: #333;
        background-color: #fff;
    }

    .container {
        padding: 20px;
        text-align: center;
    }

    input {
        display: none;
    }

    label>span {
        /* display: inline-block; */
        width: 100px;
        height: 20px;
        font-size: 18px;
        font-weight: 700;
        padding: 15px 30px;
        margin: 5px;
        cursor: pointer;
        border: 3px solid transparent;
        border-radius: 5px;
        color: #fff;
        background-color: #333;
        transition: 0.2s;
        user-select: none;
    }

    label span:hover,
    label span:active {
        background-color: #222;
    }

    input:checked+label {
        background-color: #006699;
        border-color: #333;
    }
</style>


@section('content-app')
    <div id="carouselExampleCaptions" class="carousel slide mt-0" data-bs-ride="carousel">
        <!-- Adjusted the top margin to mt-0 to remove the space above -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/caraousel-nowplaying/hd.jpg') }}" class="d-block w-100" alt=""
                    style="object-fit: cover:cover; height: 100vh;">
                <div class="carousel-caption text-center" style="top: 45%;">
                    <h1 style="font-family: 'Poppins', sans-serif; font-weight: bold;">Now Playing</h1>
                    <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 18px;">Jangan lewatkan
                        film yang akan tayang hari ini.</p>
                </div>
            </div>
        </div>
        <!-- Tambahkan ini di dalam konten Anda -->
        <div class="container">
            <label for="genreFilter">

                    @foreach ($genre as $gr)
                        <span>
                            <a class="text-decoration-none text-white" href="{{ route('genre', ['genre' => $gr->id]) }}">{{ $gr->genre }}</a>
                        </span>
                    @endforeach


            </label>
        </div>

        {{-- <script>
            $(document).ready(function() {
                $('[name="genreFilter"]').change(function() {
                    var selectedOption = $(this).filter(':checked');
                    var url = selectedOption.data('url'); // Ambil URL dari atribut data-url

                    if (url) {
                        window.location.href = url; // Alihkan pengguna ke URL yang sesuai
                    }
                });
            });
        </script> --}}



        <center>

            <br><br>
            <div class="container">
                <div class="row justify-content-start">

                    @forelse ($nowplayings as $np)
                        <div class="col-md-6 mb-3">
                            <div class="card" style="max-width: 550px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/thumbnile/' . $np->thumbnile) }}"
                                            class="img-fluid rounded-start" alt="..."
                                            style="object-fit: cover; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <br>
                                            <h5 class="card-title text-start"><strong>{{ $np->judul }}</strong></h5>
                                            <p class="card-text text-start">Durasi : {{ $np->durasi }} menit
                                                <br>
                                                Direktur : {{ $np->director }}
                                                <br>
                                                Casts : {{ $np->cast }}
                                                <br>
                                                genre : {{ $np->genre->genre }}
                                            </p>
                                            <br><br><br><br>
                                            <center> <a href="{{ route('detailfilm', $np->id) }}"
                                                    class="btn btn-dark col-md-11">Jadwal tayang dan
                                                    tiket</a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    <p  style="font-weight: 500; font-size: 30px; text-align: center; text-transform: capitalize; font-family:'Poppins'; margin-top:-50px;">genre tidak di temukan</p>
                    @endforelse
        </center>
    @endsection
