@extends('layouts.app')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedang Tayang</title>
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
    /* Tambahkan CSS berikut ke dalam file stylesheet Anda atau dalam tag <style> jika inline */
.carousel-caption {
    text-align: center;
}

.carousel-caption h1, .carousel-caption p {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
}

.carousel-caption p {
    font-weight: 500;
    font-size: 18px;
}

/* Efek bayangan untuk membuat teks bercahaya */
.carousel-caption h1, .carousel-caption p {
    text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8); /* Sesuaikan dengan preferensi Anda */
}
.container .genre-button {
    background-color: transparent;
    border: 2px solid #000000; /* Ganti dengan warna outline yang Anda inginkan */
    color: #000000; /* Ganti dengan warna teks yang Anda inginkan */
    padding: 5px 10px;
    border-radius: 10px;
    margin: 10px;
    cursor: pointer;
    transition: transform 0.2s ease, background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
}

.container .genre-button:hover {
    animation: pulse 0.5s infinite alternate; /* Animasi 'pulse' saat hover */
    background-color: #494949; /* Ganti dengan warna latar belakang saat hover yang Anda inginkan */
    color: #ffffff; /* Ganti dengan warna teks saat hover yang Anda inginkan */
    border-color: transparent; /* Ganti dengan warna outline saat hover yang Anda inginkan */
    transform: scale(1.05); /* Efek scaling saat hover */
    box-shadow: 0 0 10px rgb(137, 78, 255); /* Efek bayangan saat hover */
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.1);
    }
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
                    <h1 style="font-family: 'Poppins', sans-serif; font-weight: bold;">Sedang Tayang</h1>
                    <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 18px;">Jangan lewatkan
                        film yang akan tayang hari ini.</p>
                </div>
            </div>
        </div>
        <!-- Tambahkan ini di dalam konten Anda -->
        <div class="container">
            <h1  style="font-family: 'Poppins', sans-serif; font-weight: bold; font-size: 30px;">Pilih Genre</h1>
            @foreach ($genre as $gr)
                <button class="genre-button" onclick="window.location.href='{{ route('genre', ['genre' => $gr->id]) }}'">
                    {{ $gr->genre }}
                </button>
            @endforeach
        </div>


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
