@extends('layouts.app')
<head>
    <title>Film Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<<<<<<< Updated upstream
        <link rel="stylesheet" href="{{ URL::asset('css/detailfilm.css') }}">
=======
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        /* HOME */
        .container {
            background-color: transparent;
            box-shadow: none;
            border: none;
            display: flex;
            padding: 20px;
            align-items: center;
        }
        .content {
    display: grid;
    grid-template-columns: auto 1fr; /* Kolom pertama untuk h2, kolom kedua untuk container */
    align-items: center; /* Mengatur vertikal ke tengah */
    gap: 20px; /* Jarak antara h2 dan container */
}.contentt {
    display: flex;
    flex-direction: column; /* Elemen-elemen di dalamnya akan tampil dalam satu kolom */
}

.video-trailers {
    display: flex;
    flex-direction: row; /* Video trailer akan sejajar ke samping */
    justify-content: space-between; /* Mengatur jarak antara video trailer */
    margin-top: 10px; /* Menambahkan margin atas untuk memberikan sedikit jarak */
}

.video-trailer {
    flex: 1; /* Membagi ruang secara merata antara video trailer */
}

.video-trailer iframe {
    width: 100%;
    height:120%;
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
    margin: 0 5px; /* Jarak antara setiap kontrol penggeser */
    transition: background-color 0.3s ease;
}

.slider-circle.active {
    background-color: #717b86; /* Warna lingkaran aktif */
}

.prev-video,
.next-video {
    padding: 5px 10px;
    background-color: #a4b0bc;
    color: white;
    border: none;
    cursor: pointer;
    margin-top: 10px; /* Jarak antara tombol dan lingkaran penggeser */
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
            /* Menggeser teks ke kiri */
            margin-left: 20px;
            /* Memberikan jarak kiri dari foto */
            margin-top: 0;
            /* Menghilangkan margin atas */
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
            /* Mengatur teks ke kiri */
            margin: 0;
            /* Menghilangkan margin bawah pada teks paragraf */
        }

        .film-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .sinopsis {
            flex: 1;
            padding-left: 20px;
            font-family: 'Poppins', sans-serif;
            margin-top: 5px;
            align-self: flex-start;
        }


        .sinopsis h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .sinopsis p {
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
        }

        .left-container {
            display: flex;
            align-items: flex-start;
        }

        .left-column {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        h2 {
        padding-left: 80px;
        padding-right: 20px;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
    }

    </style>
>>>>>>> Stashed changes
</head>
@section('content')
<body>
    <h2>Spiderman VS Everybody</h2>
    <div class="container">

        <div class="left-container">
            <div class="image">
                <img src="{{ asset('img/foto-detailfilm/spidermann.jpg') }}" alt="Film" height="150px"
                    width="230px">
            </div>
            <div class="left-column">
                <div class="data">
                    <p><strong>Director :</strong> Pablo Escobar.</p>
                    <br>
                    <p><strong>Casts :</strong> Petter</p>
                    <br>
                    <p><strong>Duration :</strong> 1 Jam</p>
                    <br>
                    <p><strong>Min Usia :</strong> 15+</p>
                    <br>
                    <p><strong>Genre :</strong> Action.</p>
                    <br>
                    <p><strong>Jadwal Tayang :</strong> 19/05/2023</p>
                </div>
            </div>
        </div>
                <div class="sinopsis">
                    <h1><strong>TRAILER DAN SINOPSIS</strong></h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/shW9i6k8cB0" frameborder="0" allowfullscreen></iframe>
                    <p> Film ini mengisahkan seorang Peter Parker (Andrew Garfield) yang merupakan anak dari seorang ilmuwan bernama Richard Parker (Campbell Scott).
                        Namun suatu hari, ayah dan ibu Peter mengalami masalah yang berat sampai mengharuskan membawa Peter ke rumah pamannya.
                        Peter dititipkan kepada paman dan bibinya, bernama Ben (Martin Sheen) dan May (Sally Field).
                         Setelah kejadian itu, ayah dan ibu Peter menghilang tanpa meninggalkan kabar sama sekali.</p>
                </div>
            </div>
            <br>
    </div>
<br><br>
    <h2>Ticket dan Jadwal tayang</h2>
    <center>
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-3">
                    <div class="card" style="max-width: 550px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/card-detailfilm/ceritacinta.jpg') }}"
                                    class="img-fluid rounded-start" alt="..."
                                    style="object-fit: cover; height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <br>
                                    <h5 class="card-title text-start"><strong>CITA CINTA DARI SMA</strong></h5>
                                    <p class="card-text text-start">Ruang : XI
                                        <br>
                                        Harga : Rp. 45.000
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
                                <img src="{{ asset('img/card-detailfilm/dilan.jpg') }}"
                                    class="img-fluid rounded-start" alt="..."
                                    style="object-fit: cover; height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <br>
                                    <h5 class="card-title text-start"><strong>DILAN 1990</strong></h5>
                                    <p class="card-text text-start">Ruang : X
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
                            <img src="{{ asset('img/card-detailfilm/buyahamka.jpg') }}"
                                class="img-fluid rounded-start" alt="..."
                                style="object-fit: cover; height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title text-start"><strong>BUYAHAMKA </strong></h5>
                                <p class="card-text text-start">Ruang : XI
                                    <br>
                                    Harga : Rp. 60.000
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
                            <img src="{{ asset('img/card-detailfilm/traintobusan.jpg') }}"
                                class="img-fluid rounded-start" alt="..."
                                style="object-fit: cover; height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title text-start"><strong>TRAIN TO BUSAN</strong></h5>
                                <p class="card-text text-start">Ruang : XII
                                    <br>
                                    Harga : Rp. 55.000
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

</body>
@endsection
