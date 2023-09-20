@extends('layouts.app')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Now Playing</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/nowplaying.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
</head>

@section('content-app')
    <div id="carouselExampleCaptions" class="carousel slide mt-0" data-bs-ride="carousel">
        <!-- Adjusted the top margin to mt-0 to remove the space above -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/caraousel-nowplaying/kontenn.jpg') }}" class="d-block w-100"
                alt="" style="object-fit: cover:cover; height: 100vh;">
                <div class="carousel-caption text-center" style="top: 45%;">
                    <h1 style="font-family: 'Poppins', sans-serif; font-weight: bold;">Now Playing</h1>
                    <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 18px;">Jangan lewatkan
                        film yang akan tayang hari ini.</p>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <br><br>
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-3">
                    <div class="card" style="max-width: 550px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/card-nowplaying/spiderman.jpg') }}"
                                class="img-fluid rounded-start" alt="..."
                                style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title text-start"><strong>SPIDERMAN VS EVERYBODY </strong></h5>
                                        <p class="card-text text-start">Durasi : 150 menit
                                            <br>
                                            Direktur : Marcquez
                                            <br>
                                            Casts : Marcquez, Rosi
                                        </p>
                                        <br><br><br><br>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Jadwal tayang dan
                                            tiket</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan card kedua di sini -->
                    <div class="col-md-6 mb-3">
                        <div class="card" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/card-nowplaying/selesai.jpg') }}"
                                    class="img-fluid rounded-start" alt="..."
                                        style="object-fit: cover; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <br>
                                        <h5 class="card-title text-start"><strong>SELESAI</strong></h5>
                                        <p class="card-text text-start">Durasi : 80 menit
                                            <br>
                                            Direktur : Tompi
                                            <br>
                                            Casts : Ariel Tatum, Gading Marten, Anya
                                            Geraldine, Marini Soerjosoemarno, Farish
                                            Nahdi, Tika Panggabean, Imam Darto.
                                        </p>
                                        <br><br>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Jadwal tayang dan
                                                tiket</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir card 2 --}}
                    <!-- Card ketiga -->
                    <div class="col-md-6 mb-3">
                        <div class="card" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/card-nowplaying/jendelaseribusungai.jpg') }}"
                                        class="img-fluid rounded-start" alt="..."
                                        style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start"><strong>JENDELA SERIBU SUNGAI</strong></h5>
                                        <p class="card-text text-start">Durasi : 1 jam 24 menit
                                            <br>
                                            Direktur : Jay Sukmo
                                            <br>
                                            Casts : Agla Artalidia, Olla Ramlan, Ariyo Wahab
                                            Ibrahim ‘Baim, Ajil Ditto, Sheryl Drisanna,
                                            Sheryl Drisanna, Halisa Naura, Bima Sena,
                                            Bopak Castello, Ian Kasela, Mathias Muchus.
                                            <br>
                                        </p>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Jadwal tayang dan
                                                tiket</a></center>
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
                                    <img src="{{ asset('img/card-nowplaying/bissmillah.jpg') }}"
                                    class="img-fluid rounded-start" alt="..."
                                    style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start"><strong>BISSMILLAH KUNIKAHI SUAMIMU</strong></h5>
                                        <p class="card-text text-start">Durasi : 110 menit
                                            <br>
                                            Direktur : Benni Setiawan
                                            <br>
                                            Casts : Syifa Hadju, Risky Nazar, Mikha Tamboyang, Refal Hady, Dede Yusuf,
                                            Unique Priscilla.
                                        </p>
                                        <br><br>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Jadwal tayang dan
                                                tiket</a></center>
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
                                    <img src="{{ asset('img/card-nowplaying/amstel.jpg') }}"
                                    class="img-fluid rounded-start" alt="..."
                                    style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start"><strong>MERINDU CAHAYA DI AMSTEL</strong></h5>
                                        <p class="card-text text-start">Durasi : 107 menit
                                            <br>
                                            Direktur : Hadrah Daeng Ratu
                                            <br>
                                            Casts : Amanda Rawles, Rachel Amanda,
                                            Briyan Domani.
                                            <br><br><br><br>
                                        </p>
                                        <br><br>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Jadwal tayang dan
                                                tiket</a></center>
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
                                    <img src="{{ asset('img/card-nowplaying/gasspoll.jpg') }}"
                                    class="w-100 rounded-start" alt="..."
                                    style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start"><strong>KEJAR MIMPI GASPOL!</strong></h5>
                                        <p class="card-text text-start ">Durasi : 133 menit
                                            <br>
                                            Direktur : Hasto Broto
                                            <br>
                                            Casts : Asri Welas, Tora Sudiro, Michelle,
                                            Nopek Novian, Erick Estrada, Arif Alfiansyah,
                                            Marwoto Kawer, Arief Didu, Absur Arsyad,
                                            Deddy rizaldy, Vivid Fitri Argarini, Syakir Daulay,
                                            Adi Arkiang, Yanti Lemoe.
                                            <br><br><br>
                                        </p>
                                        <center> <a href="#" class="btn btn-dark col-md-11">Jadwal tayang dan
                                                tiket</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </center>
        @endsection
