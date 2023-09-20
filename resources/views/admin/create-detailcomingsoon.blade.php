<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Comingsoon</title>
    <link rel="website icon" type="png" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ URL::asset('css/admin/create-detailcomingsoon.css') }}">
</head>

<body>
    <center></center>
    <div class="container col-6">
        <div class="d-flex">
            <div class="form-container col-6">
                <!-- Form Tambah Data Film (Form Pertama) -->
                <form action="/simpan-data-film" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Ini digunakan di Laravel untuk melindungi dari serangan CSRF -->
                    <input type="text" id="judul" name="judul" class="input-text" placeholder="Judul" required>
                    <input type="text" id="director" name="director" class="input-text" placeholder="Director"
                        required>
                    <input type="text" id="cast" name="cast" class="input-text" placeholder="Cast">
                    <input type="number" id="minimal_usia" name="minimal_usia" class="input-text"
                        placeholder="Minimal Usia">
                    <input type="text" id="genre" name="genre" class="input-text" placeholder="Genre">
                </form>
            </div>

            <div class="form-container col-6">
                <!-- Form Baru (Form Kedua) -->
                <form action="/simpan-data-film-baru" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Ini digunakan di Laravel untuk melindungi dari serangan CSRF -->
                    <input type="text" id="durasi" name="durasi" class="input-text" placeholder="Durasi"
                        required>
                    <input type="text" id="jadwal_tayang" name="jadwal_tayang" class="input-text"
                        placeholder="Jadwal Tayang" required>
                        <input type="url" id="video_trailer" name="video_trailer" class="input-text"
                        placeholder="Link Video Trailer" required>
                    <textarea name="sinopsis" id="sinopsis" class="input-text" cols="30" rows="3" placeholder="Sinopsis"></textarea>
                </form>
            </div>
        </div>
        <br>
        <center>
            <input type="file" id="foto" name="foto" accept="image/*" class="input-file col-8" required
                style="width: 90%;">

            <button type="button" class="input-submit" style="width: 90%;">Upload</button>
        </center>
        <!-- Input File dan Tombol Submit di luar form -->

    </div>
</body>

</html>
