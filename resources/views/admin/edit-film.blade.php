@extends('layouts.admin')

@section('content')

<style>
    .form-edit {
        width: 80vw;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-edit label {
        display: flex; /* Menggunakan flexbox untuk mengatur label dan input di samping */
        align-items: center; /* Menyelaraskan label dan input secara vertikal */
        margin-bottom: 10px;
    }

    .form-edit label span {
        font-weight: bold;
        width: 150px; /* Lebar label */
        margin-right: 10px; /* Jarak antara label dan input */
    }

    .form-edit input[type="text"],
    .form-edit input[type="number"],
    .form-edit input[type="url"],
    .form-edit input[type="date"],
    .form-edit input[type="time"],
    .form-edit textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    .form-edit select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    .form-edit input[type="file"] {
        display: flex;
        margin-top: 5px;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }
    .row {
        margin-top: 10px;
    }

        /* CSS untuk tombol "Choose File" */
    input[type="file"]::-webkit-file-upload-button {
        background-color: #00410b; /* Warna hijau army */
        color: #ffffff; /* Warna teks putih */
        border: none;
        cursor: pointer;
    }

    /* Styling tambahan jika diperlukan */
    input[type="file"]::-webkit-file-upload-button:hover {
        background-color: #006f19; /* Warna saat tombol dihover */
    }
</style>
<form action="" method="post" class="form-edit" style="background-color: #030010">
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <h4 style="color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: bold;">Edit Now Playing</h4>
        <button style="color: #ffffff; background-color: #00410b; padding: 10px 20px; border: none; border-radius: 20px;"> <a href="#">Simpan</a></button>
    </div>

    <br>
    <div class="row">
        <div class="col-md-6">
            <label for="judul">
                <span class="form-label" style="color: #fff">Name:</span>
                <input class="form-control" type="text" name="judul" id="judul" value="{{ $film->judul }}">
            </label>
            <br>
            <label for="director">
                <span class="form-label" style="color: #fff">Director:</span>
                <input class="form-control" type="text" name="director" id="director" value="{{ $film->director }}">
            </label>
            <br>
            <label for="cast">
                <span class="form-label" style="color: #fff">Cast:</span>
                <input class="form-control" type="text" name="cast" id="cast" value="{{ $film->cast }}">
            </label>
            <br>
            <label for="minimal_usia">
                <span class="form-label" style="color: #fff">Minimal Usia:</span>
                <input class="form-control" type="number" min="0" name="minimal_usia" id="minimal_usia"
                    value="{{ $film->minimal_usia }}">
            </label>
            <br>
            <label for="genre">
                <span class="form-label" style="color: #fff">Genre:</span>
                <input class="form-control" type="text" name="genre" id="genre" value="{{ $film->genre }}">
            </label>
            <br>
            <label for="durasi">
                <span class="form-label" style="color: #fff">Durasi:</span>
                <input class="form-control" type="text" name="durasi" id="durasi" value="{{ $film->durasi }}">
            </label>
            <br>
            <label for="jadwal_tayang">
                <span class="form-label" style="color: #fff">Jadwal Tayang:</span>
                <input class="form-control" type="date" name="jadwal_tayang" id="jadwal_tayang"
                    value="{{ $film->jadwal_tayang }}">
            </label>
            <br>
        </div>
        <div class="col-md-6">
            <label for="trailer">
                <span class="form-label" style="color: #fff">Trailer:</span>
                <input class="form-control" type="url" name="trailer" id="trailer" value="{{ $film->trailer }}">
            </label>
            <br>
            <label for="sinopsis">
                <span style="color: #fff">Sinopsis:</span>
                <textarea name="sinopsis" id="sinopsis" cols="30" rows="7">{{ $film->sinopsis }}</textarea>
            </label>
            <br>
            <label for="jam_tayang">
                <span class="form-label" style="color: #fff">Jam Tayang:</span>
                <input class="form-control" type="time" name="jam_tayang" id="jam_tayang"
                    value="{{ $film->jam_tayang }}">
            </label>
            <br>
            <label for="status">
                <span class="form-label" style="color: #fff">Status:</span>
                <select name="status" id="status">
                    <option value="nowplaying" @if ($film->status === "nowplaying") selected @endif>Now Playing</option>
                    <option value="comingsoon">Coming Soon</option>
                </select>
            </label>
            <br>
            <label for="thumbnail">
                <span class="form-label" style="color: #fff">Thumbnail:</span>
                <input class="form-control" type="file" name="thumbnail" id="thumbnail" value="{{ $film->thumbnail }}">
            </label>
            <br>
        </div>
    </div>
</form>

@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
