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
</style>

<form action="" method="post" class="form-edit" style="background-color: #030010">
    <div class="row">
        <div class="col-md-6">
            <label for="judul">
                <span class="form-label" style="color: #fff">Name:</span>
                <input class="form-control" type="text" name="judul" id="judul" value="{{ $film->judul }}">
            </label>
            <label for="director">
                <span class="form-label" style="color: #fff">Director:</span>
                <input class="form-control" type="text" name="director" id="director" value="{{ $film->director }}">
            </label>
            <label for="cast">
                <span class="form-label" style="color: #fff">Cast:</span>
                <input class="form-control" type="text" name="cast" id="cast" value="{{ $film->cast }}">
            </label>
            <label for="minimal_usia">
                <span class="form-label" style="color: #fff">Minimal Usia:</span>
                <input class="form-control" type="number" min="0" name="minimal_usia" id="minimal_usia"
                    value="{{ $film->minimal_usia }}">
            </label>
            <label for="genre">
                <span class="form-label" style="color: #fff">Genre:</span>
                <input class="form-control" type="text" name="genre" id="genre" value="{{ $film->genre }}">
            </label>
            <label for="durasi">
                <span class="form-label" style="color: #fff">Durasi:</span>
                <input class="form-control" type="text" name="durasi" id="durasi" value="{{ $film->durasi }}">
            </label>
            <label for="jadwal_tayang">
                <span class="form-label" style="color: #fff">Jadwal Tayang:</span>
                <input class="form-control" type="date" name="jadwal_tayang" id="jadwal_tayang"
                    value="{{ $film->jadwal_tayang }}">
            </label>
            <label for="trailer">
                <span class="form-label" style="color: #fff">Trailer:</span>
                <input class="form-control" type="url" name="trailer" id="trailer" value="{{ $film->trailer }}">
            </label>
        </div>
        <div class="col-md-6">
            <label for="sinopsis">
                <span style="color: #fff">Sinopsis:</span>
                <textarea name="sinopsis" id="sinopsis" cols="30" rows="9">{{ $film->sinopsis }}</textarea>
            </label>
            <label for="jam_tayang">
                <span class="form-label" style="color: #fff">Jam Tayang:</span>
                <input class="form-control" type="time" name="jam_tayang" id="jam_tayang"
                    value="{{ $film->jam_tayang }}">
            </label>
            <label for="status">
                <span class="form-label" style="color: #fff">Status:</span>
                <select name="status" id="status">
                    <option value="nowplaying" @if ($film->status === "nowplaying") selected @endif>Now Playing</option>
                    <option value="comingsoon">Coming Soon</option>
                </select>
            </label>
            <label for="thumbnail">
                <span class="form-label" style="color: #fff">Thumbnail:</span>
                <input class="form-control" type="file" name="thumbnail" id="thumbnail" value="{{ $film->thumbnail }}">
            </label>
        </div>
    </div>
</form>

@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
