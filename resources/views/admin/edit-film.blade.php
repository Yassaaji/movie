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

<body>
    <div class="container mt-4">
        <h1 class="text-center" style="font-family: 'Poppins', sans-serif; font-weight: bold; color:#fff;">Create Film</h1>
        <div class="row">
            <div class="col-4">
                <div class="border-form">
                    <form action="{{ route('uploadfilm') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="text" id="judul" name="judul" class="input-text" placeholder="Judul" required>
                        <input type="text" id="director" name="director" class="input-text" placeholder="Director" required>
                        <input type="text" id="cast" name="cast" class="input-text" placeholder="Cast">
                        <input type="number" id="minimal_usia" name="minimal_usia" class="input-text"
                            placeholder="Minimal Usia" min="0">
                        <input type="text" id="genre" name="genre" class="input-text" placeholder="Genre">
                        <select name="status" id="status" class="input-text" required>
                            <option value="" disabled selected>Pilih</option>
                            <option value="nowplaying">Now Playing</option>
                            <option value="comingsoon">Coming Soon</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="border-form p-3">
                        <input type="text" id="durasi" name="durasi" class="input-text" placeholder="Durasi" required>
                        <input type="date" id="jadwal_tayang" name="jadwal_tayang" class="input-text"
                            placeholder="Jadwal Tayang" required>
                        <input type="url" id="trailer" name="trailer" class="input-text"
                            placeholder="Link Video Trailer" required>
                        <textarea name="sinopsis" id="sinopsis" class="input-text" cols="30" rows="3"
                            placeholder="Sinopsis"></textarea>
                    </div>
                </div>

                <div class="col-4">
                    <div class="border-form p-3">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: bold; color:#000000;">Tiket</h3>
                        <label for="ruangan">Ruangan:</label> <br>
                        <select name="ruangan" id="ruangan">
                            <option value="A">Ruang A</option>
                            <option value="B">Ruang B</option>
                            <option value="C">Ruang C</option>
                        </select>
                        <input type="time" id="jam_tayang" name="jam_tayang" class="input-text"
                            placeholder="Jam Tayang" >
                        {{-- <input type="text" id="kursi" name="kursi" class="input-text" placeholder="Kursi" > --}}
                        <input type="number" id="harga" name="harga" class="input-text" placeholder="Harga" min="0">
                    </div>
                </div>
            </div>

            <center>
                <br><br>
                <input type="file" id="thumbnail" name="thumbnile" accept="image/*" class="input-file " required
                    style="width: 90%;">
                <button type="submit" class="input-submit" style="width: 90%;">Upload</button>
            </center>
        </form>
    </div>
</body>

</html>
@endsection
