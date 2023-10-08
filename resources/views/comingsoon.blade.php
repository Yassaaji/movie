@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/comingsoon.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

</head>
<style>
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
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/caraousel-comingsoon/comingsoon.jpg') }}" class="d-block w-100"
                        alt="" style="width: 200%; height: auto; max-height: 600px;">
                    <div class="carousel-caption text-center" style="top: 45%;">
                        {{-- <h2>COMING SOON</h2> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-end">
                <div class="container">
                    <label for="filterGenre">
                            @foreach ($genre as $gn)
                                <span>
                                    <a class="text-decoration-none text-white" href="{{ route('gn', ['gn' => $gn->id]) }}">{{ $gn->genre }}</a>
                                </span>
                            @endforeach


        <center>

        </div>
         <div class="container">
            <br><br>

                        </label>
                    @forelse ( $comingsoon as $film )

                    <div class="col-md-6 mb-3">
                        <div class="card" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/thumbnile/' . $film->thumbnile) }}"
                                    class="img-fluid rounded-start" alt="..."
                                    style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title text-start"><strong>{{ $film->judul }}</strong></h5>
                                        <p class="card-text text-start">Durasi : {{ $film->durasi }}
                                            <br>
                                            Direktur : {{ $film->director }}
                                            <br>
                                            Casts : {{ $film->cast }}
                                            <br>
                                            genre : {{ $film->genre->genre }}
                                        </p>
                                        <br><br><br><br><br>
                                        <center> <a href="{{ route('detailfilm',$film->id) }}" class="btn btn-dark col-md-11">Detail Film</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @empty

                    <p  style="font-weight: 500; font-size: 30px; text-align: center; text-transform: capitalize; font-family:'Poppins'; margin-top:-50px;">genre tidak di temukan</p>
                    @endforelse






                    <!-- Tambahkan card kedua di sini -->
                    {{-- <div class="col-md-6 mb-3">
                        <div class="card" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/card-comingsoon/buyahamka.jpg') }}"
                                        class="img-fluid rounded-start" alt="..."
                                        style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title text-start"><strong>BUYA HAMKA</strong></h5>
                                        <p class="card-text text-start">Durasi : 2,5 jam
                                            <br>
                                            Direktur : Fajar Bustomi
                                            <br>
                                            Casts : Vino Bastian, Laudya Chinthya Bella,
                                            Donny Damara, Desy Ratnasari, Ferry Salim,
                                            Resha Putri, Mawar De Jongh, AnjasMara,
                                            Verdy Solaiman.
                                            <br>
                                            Tanggal Tayang : 10/09/2023

                                        </p>
                                        <br><br>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Detail Film</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- akhir card 2 --}}
                    <!-- Card ketiga -->
                    {{-- <div class="col-md-6 mb-3">
                        <div class="card" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/card-comingsoon/dilan.jpg') }}"
                                        class="img-fluid rounded-start" alt="..."
                                        style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start"><strong>DILAN 1990</strong></h5>
                                        <p class="card-text text-start">Durasi : 2,5 jam
                                            <br>
                                            Direktur : Pidi Baiq, Fajar Bustomi
                                            <br>
                                            Casts : Iqbal ramadhan, Vanesha Pricillia, Giulio Parengkuan,
                                            <br>
                                            Tanggal Tayang : 27/09/2023
                                            <br><br><br><br><br>
                                        </p>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Detail Film</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card keempat -->
                    <div class="col-md-6 mb-3">
                        <div class="card" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/card-comingsoon/tekateki.jpg') }}"
                                        class="img-fluid rounded-start" alt="..."
                                        style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start"><strong>TEKA TEKI TIKA</strong></h5>
                                        <p class="card-text text-start">Durasi : 1 Jam 23 Menit
                                            <br>
                                            Direktur : Ernest Prakasa
                                            <br>
                                            Casts : Sheila Dara Aisyah, Ferry Salim,
                                            Jenny Zhang, Dion Wiyoko, Morgan Oey,
                                            Eriska Rein, Tansri Kemala, Ayu Laksmi,
                                            Whani Darmawan, Kiki Narendra.
                                            <br>
                                            Tanggal Tayang : 23/09/2023
                                        </p>
                                        <br><br>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Detail Film</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card kelima -->
                    <div class="col-md-6 mb-3">
                        <div class="card" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/card-comingsoon/turningred.jpg') }}"
                                        class="img-fluid rounded-start" alt="..."
                                        style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start"><strong>TURNING RED</strong></h5>
                                        <p class="card-text text-start">Durasi : 1 jam 40 menit
                                            <br>
                                            Direktur : Lindsey Collins
                                            <br>
                                            Casts : Anne Marie, Jordan Fisher, Wai Ching Ho, James Hong.
                                            <br>
                                            Tanggal Tayang : 23/09/2023
                                            <br><br><br><br>
                                        </p>
                                        <br><br>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Detail Film</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card keenam -->
                    <div class="col-md-6 mb-3">
                        <div class="card" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/card-comingsoon/traintobusan.jpg') }}"
                                        class="w-100 rounded-start" alt="..."
                                        style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start"><strong>TRAIN TO BUSAN</strong></h5>
                                        <p class="card-text text-start "> Durasi : 2 jam
                                            <br>
                                            Direktur : Yeon Sang-Ho
                                            <br>
                                            Casts : Gong Yoo, Ma Dong-Seok, Yeon Sang-Ho, Jung Yu-Mi, Kim Su-An.
                                            <br>
                                            Tanggal Tayang : 12/09/2023
                                            <br><br><br><br><br><br>
                                        </p>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Detail Film</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
        </center>
    @endsection
