<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Film</title>
<link rel="stylesheet" href="{{ URL::asset('css/admin/create-comingsoon.css') }}">
</head>
<body>
    <center>
        <div class="container">
            <form action="/simpan-data-film" method="POST" enctype="multipart/form-data" class="mx-auto">
                @csrf <!-- Ini digunakan di Laravel untuk melindungi dari serangan CSRF -->

                <input type="text" id="judul" name="judul" class="input-text" placeholder="Judul" required>
                <br>

                <input type="text" id="director" name="director" class="input-text" placeholder="Director" required>
                <br>

                <input type="text" id="cast" name="cast" class="input-text" placeholder="Cast">
                <br>

            </form>
            <center>
                <br><br><br>
                <input type="file" id="foto" name="foto" accept="image/*" class="input-file" required style="width: 500px;">
<br>

<input type="submit" value="Upload" class="input-submit" style="width: 500px;">

            </center>

        </div>
    </center>

</body>
</html>
