@extends('layouts.app')

<head>
    <title>Film Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/detailfilm.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        h1 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    margin: 50;
}


        .content {
            display: flex;
            grid-template-columns: auto 1fr;
            /* Kolom pertama untuk h2, kolom kedua untuk container */
            align-items: center;
            /* Mengatur vertikal ke tengah */
            gap: 1px;
            /* Jarak antara h2 dan container */
        }

        .contentt {
            display: flex;
            flex-direction: column;
            /* Elemen-elemen di dalamnya akan tampil dalam satu kolom */
        }

        .video-trailers {
            display: flex;
            flex-direction: row;
            /* Video trailer akan sejajar ke samping */
            justify-content: space-between;
            /* Mengatur jarak antara video trailer */
            margin-top: 10px;
            /* Menambahkan margin atas untuk memberikan sedikit jarak */

        }

        .video-trailer {
            flex: 1;
            /* Membagi ruang secara merata antara video trailer */

        }

        .video-trailer iframe {
            width: 100%;
            height: 120%;
        }


        .column {
            flex-basis: 35%;
        }

        /* styles.css */
        .video-slider {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .video-trailers {
            display: flex;
            overflow: hidden;
            width: 100%;
            transition: transform 0.3s ease-in-out;
        }

        .video-trailer {
            min-width: 300px;
            max-width: 300px;
            margin: 0 10px;
        }

        .slider {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .slider-circle {
            width: 15px;
            height: 15px;
            background-color: #bcc8d5;
            border-radius: 50%;
            cursor: pointer;
            margin: 0 5px;
            /* Jarak antara setiap kontrol penggeser */
            transition: background-color 0.3s ease;
        }

        .slider-circle.active {
            background-color: #717b86;
            /* Warna lingkaran aktif */
        }

        .prev-video,
        .next-video {
            padding: 5px 10px;
            background-color: #a4b0bc;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            /* Jarak antara tombol dan lingkaran penggeser */
        }

        .prev-video:hover,
        .next-video:hover {
            background-color: #b5c0cd;
        }

        /* END HOME */

        .image {
            flex: 1;
            text-align: right;
            color: rgb(0, 0, 0);
            margin-top: 0;
        }

        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 25px;
        }


        .data {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 5px; /* Anda mungkin ingin mengatur ulang margin kiri */
    margin-top: 0;
}


        .data h2 {
            font-size: 24px;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .data p {
    font-size: 16px;
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
    text-align: left;
    margin: 0;
}


        .film-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .sinopsis {
            flex: 1;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            padding: 0;
        }

        .text {
            font-size: 24px;
            font-family: 'Poppins', sans-serif;
            align-self: flex-start;
        }

        .sinopsis h1 {
            font-size: 24px;
        }

        .sinopsis p {
            font-size: 12px;
            line-height: 1.5;
            margin: 0;
        }

        .left-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        .left-column {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        h2 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    /* margin-top: 20px; Add margin at the top */
    /* padding-top: 1px; */
    padding-left: 5 0px;
}

        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            padding: 0;
        }

        .jumbotron{
            padding: 0px;
            display: flex;
            align-items: flex-start;
            margin-top: 100px;
            justify-content: space-between;
        }
    </style>
</head>
@section('content-app')
<br><br><br>
<h1><strong>Spiderman VS Everybody</strong></h1>
<div class="container jumbotron">
    <div class="content">
        <div class="image">
            <img src="{{ asset('img/foto-detailfilm/spidermann.jpg') }}" alt="Film" height="150px" width="230px">
        </div>
        <div class="data">
            <p style="margin-bottom: 25px;"><strong>Director :</strong> Pablo Escobar.</p>
            <p style="margin-bottom: 25px;"><strong>Casts :</strong> Petter</p>
            <p style="margin-bottom: 25px;"><strong>Duration :</strong> 1 Jam</p>
            <p style="margin-bottom: 25px;"><strong>Min Usia :</strong> 15+</p>
            <p style="margin-bottom: 25px;"><strong>Genre :</strong> Action.</p>
            <p style="margin-bottom: 25px;"><strong>Jadwal Tayang :</strong> 19/05/2023</p>
        </div>

    </div>
    <div class="sinopsis">
        <h1><strong>TRAILER DAN SINOPSIS</strong></h1>
        <iframe style="width: 90%; height:350px;" src="https://www.youtube.com/embed/shW9i6k8cB0" frameborder="0" allowfullscreen></iframe>
        <p style="width:90%;"> Film ini mengisahkan seorang Peter Parker (Andrew Garfield) yang merupakan anak dari seorang ilmuwan bernama Richard Parker (Campbell Scott).
            Namun suatu hari, ayah dan ibu Peter mengalami masalah yang berat sampai mengharuskan membawa Peter ke rumah pamannya.
            Peter dititipkan kepada paman dan bibinya, bernama Ben (Martin Sheen) dan May (Sally Field).
            Setelah kejadian itu, ayah dan ibu Peter menghilang tanpa meninggalkan kabar sama sekali.</p>
    </div>
</div>
<br><br>
    <h2><strong>Ticket dan Jadwal tayang</strong></h2>
    <center>
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-3">
                    <div class="card" style="max-width: 550px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/card-detailfilm/SpidermanCard.jpg') }}"
                                    class="img-fluid rounded-start" alt="..."
                                    style="object-fit: cover; height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <br>
                                    <h5 class="card-title text-start"><strong>SPIDERMAN VS EVERYBODY</strong></h5>
                                    <p class="card-text text-start">Ruang : XII
                                        <br>
                                        Harga : Rp. 35.000
                                        <br>
                                        Jam : 10:30
                                    </p>
                                    <br>
                                    <center> <a href="#" class="btn btn-dark col-md-11">Beli Tiket</a></center>
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
                                <img src="{{ asset('img/card-detailfilm/SpidermanCard.jpg') }}"
                                    class="img-fluid rounded-start" alt="..."
                                    style="object-fit: cover; height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <br>
                                    <h5 class="card-title text-start"><strong>SPIDERMAN VS EVERYBODY</strong></h5>
                                    <p class="card-text text-start">Ruang : XII
                                        Harga : Rp. 35.000
                                        <br>
                                        Jam : 13.00
                                    </p>
                                    <br><br>
                                    <center> <a href="#" class="btn btn-dark col-md-11">Beli Tiket</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              {{-- Akhir Card perbaris --}}
<center>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3 text-center"> <!-- Tambahkan kelas text-center di sini -->
                <div class="card" style="max-width: 550px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('img/card-detailfilm/SpidermanCard.jpg') }}"
                                class="img-fluid rounded-start" alt="..."
                                style="object-fit: cover; height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title text-start"><strong>SPIDERMAN VS EVERYBODY</strong></h5>
                                <p class="card-text text-start">Ruang : XII
                                    <br>
                                    Harga : Rp. 35.000
                                    <br>
                                    Jam : 16.30
                                </p>
                                <br>
                                <center> <a href="#" class="btn btn-dark col-md-11">Beli Tiket</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan card kedua di sini -->
            <div class="col-md-6 mb-3 text-center"> <!-- Tambahkan kelas text-center di sini -->
                <div class="card" style="max-width: 550px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('img/card-detailfilm/SpidermanCard.jpg') }}"
                                class="img-fluid rounded-start" alt="..."
                                style="object-fit: cover; height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title text-start"><strong>SPIDERMAN VS EVERYBODY</strong></h5>
                                <p class="card-text text-start">Ruang : XII
                                    <br>
                                    Harga : Rp. 35.000
                                    <br>
                                    Jam : 20.00
                                </p>
                                <br>
                                <center> <a href="#" class="btn btn-dark col-md-11">Beli Tiket</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Akhri card perbaris ke 2 --}}
        </div>
    </div>
</center>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                    </script>


@endsection
