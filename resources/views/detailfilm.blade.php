<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/detailfilm.css') }}">
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

</html>
