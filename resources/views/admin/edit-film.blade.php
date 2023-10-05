@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Create Film</title>
    <!-- Tambahkan referensi ke CSS Bootstrap dan CSS khusus Anda -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/admin/create-film.css') }}">
</head>
<style>
    body{
        background-color: #06000f;
    }
    .col-4{
        padding: 20px;
        scroll-padding-top:
    }
    <style>
    .center-container {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-direction: column;
    }

    .center-container img {
        max-width: 200px;
        max-height: 100px;
        margin-bottom: 10px; /* Memberikan jarak antara gambar dan input file */
    }

    .input-file {
        width: 50%;
        margin-top: 10px;
    }

    .input-submit {
        width: 90%;
        background-color: #0f0f0f;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        margin-top: 10px;
    }
    .status-label {
        display: block; /* Mengubah label menjadi elemen blok untuk tampil di atas elemen select */
        color: #fff;
        margin-bottom: 5px; /* Memberikan jarak ke bawah dari label ke elemen select */
    }

    .status {
        width: 90%; /* Untuk mengisi lebar container */
    }
</style>



</style>
<body>
    <div class="container mt-4">
        <h5 class="text-center" style="font-family: 'Poppins', sans-serif; font-weight: bold; color:#fff;">Edit Film</h5>
        <div class="row">
            <div class="col-4">
                <div class="border-form">
                    <form action="{{ route('uploadfilm') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                   <input type="text" id="judul" name="judul" class="input-text" placeholder="Judul" required
                            value="{{ old('judul') ?? $film->judul ?? '' }}">

                            <input type="text" id="director" name="director" class="input-text" placeholder="Director" required
                            value="{{ old('director') ?? $film->director ?? '' }}">

                        <input type="text" id="cast" name="cast" class="input-text" placeholder="Cast"  required
                            value="{{ old('cast') ?? $film->cast ?? '' }}">

                        <input type="number" id="minimal_usia" name="minimal_usia" class="input-text"
                            placeholder="Minimal Usia" min="0"  required
                            value="{{ old('minimal_usia') ?? $film->minimal_usia ?? '' }}">

                        <input type="text" id="genre" name="genre" class="input-text" placeholder="Genre"  required
                            value="{{ old('genre') ?? $film->genre ?? '' }}">

                            {{-- <select name="status" id="status" class="input-text" required value="{{ old('status') ?? $film->status ?? '' }}">
                                <option value="nowplaying">Now Playing</option>
                                <option value="comingsoon">Coming Soon</option>
                            </select> --}}
                            <br><br>
                            <select class="status" name="status" id="status">
                                <option value="Now Playing" {{ $film->status == 'Now Playing' ? 'selected' : '' }}>Now Playing</option>
                                <option value="Coming Soon" {{ $film->status == 'Coming Soon' ? 'selected' : '' }}>Coming Soon</option>
                            </select>
                            @error('status')
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="border-form p-3">
                        <input type="text" id="durasi" name="durasi" class="input-text" placeholder="Durasi"  required
                            value="{{ old('durasi') ?? $film->durasi ?? '' }}">

                        <input type="date" id="jadwal_tayang" name="jadwal_tayang" class="input-text"
                            placeholder="Jadwal Tayang"  required
                            value="{{ old('jadwal_tayang') ?? $film->jadwal_tayang ?? '' }}">

                        <input type="url" id="trailer" name="trailer" class="input-text"
                            placeholder="Link Video Trailer"  required
                            value="{{ old('trailer') ?? $film->trailer ?? '' }}">

                       <textarea name="sinopsis" id="sinopsis" class="input-text" cols="30" rows="4" placeholder="Sinopsis" required>{{ old('sinopsis') ?? $film->sinopsis ?? '' }}</textarea>

                    </div>
                </div>

                <div class="col-4">
                    <div class="border-form p-3">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: bold; color:#ffffff;">Tiket</h3>
                        <label for="ruangan" style="color: #fff">Ruangan:</label> <br>
                        <select name="ruangan" id="ruangan"  required
                            value="{{ old('ruangan') ?? $film->ruangan ?? '' }}" >
                            <option value="A">Ruang A</option>
                            <option value="B">Ruang B</option>
                            <option value="C">Ruang C</option>
                        </select>
                        <br>
                        <label for="jam_tayang" style="color: #fff">Jam Tayang:</label> <br>
                        <input type="time" id="jam_tayang" name="jam_tayang" class="input-text"
                            placeholder="Jam Tayang"  required
                            value="{{ old('jam_tayang') ?? $film->jam_tayang ?? '' }}">
                        {{-- <input type="text" id="kursi" name="kursi" class="input-text" placeholder="Kursi" > --}}
                        <label for="harga" style="color: #fff">Harga:</label> <br>
                        <input type="number" id="harga" name="harga" class="input-text" placeholder="Harga" min="0"  required
                            value="{{ old('harga') ?? $film->harga ?? '' }}">
                    </div>
                </div>
            </div>
            <center>
                <div class="center-container">
                    <img src="{{ asset('storage/thumbnile/' . $film->thumbnile ) }}" alt="{{ $film->judul }}" height="100px" width="200px">
                    <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="input-file" required>
                    <button type="submit" class="input-submit">Upload</button>
                </div>
            </center>
        </form>
    </div>
</body>

</html>

<script>
    document.getElementById('upload-form').addEventListener('submit', function(e) {
        const fileInput = document.getElementById('thumbnail');
        const allowedFormats = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];

        if (fileInput.files.length > 0) {
            const selectedFile = fileInput.files[0];

            if (allowedFormats.indexOf(selectedFile.type) === -1) {
                e.preventDefault(); // Mencegah pengiriman formulir jika format tidak sesuai
                alert('Hanya file PNG, JPG, JPEG, dan GIF yang diizinkan.');
            }
        }
    });
</script>
@endsection
