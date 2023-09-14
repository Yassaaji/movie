<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        nav {
        }

        .container {
            background-color: transparent;
            box-shadow: none;
            border: none;
            display: flex;
            padding: 20px;
            align-items: center;
        }

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
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>
    <h2>Spiderman VS Everybody</h2>
    <div class="container">

        <div class="left-container">
            <div class="image">
                <img src="{{ Storage::url('public/foto-detailfilm/spidermann.jpg') }}" alt="Film" height="150px"
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
            <h1><strong>SINOPSIS</strong></h1>
            <p>Suspendisse ultrices orci pulvinar, tincidunt odio at, egestas odio. Nulla facilisi. Sed auctor purus id
                velit pretium feugiat. Nullam elit ex, sollicitudin sit amet enim at, consectetur scelerisque quam.
                Donec eget tortor nisi. Proin id ornare orci. Duis pretium posuere elementum. Mauris tincidunt lacus
                arcu, sollicitudin blandit sapien facilisis eget. Pellentesque suscipit ex vitae elit ultrices, vitae
                pulvinar arcu iaculis. Mauris venenatis sit amet ipsum id porttitor. Duis sagittis nisi et orci
                ultricies efficitur.</p>
        </div>
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
                                <img src="{{ Storage::url('public/card-detailfilm/ceritacinta.jpg') }}"
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
                                <img src="{{ Storage::url('public/card-detailfilm/dilan.jpg') }}"
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
                            <img src="{{ Storage::url('public/card-detailfilm/buyahamka.jpg') }}"
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
                            <img src="{{ Storage::url('public/card-detailfilm/traintobusan.jpg') }}"
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

</html>
