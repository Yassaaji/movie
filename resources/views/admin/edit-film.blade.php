@extends('layouts.admin')

@section('content')

<style>
    .form-edit{
        width: 80vw;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .form-edit label {
        display: block;
        margin-bottom: 10px;
    }
    .form-edit label span {
        font-weight: bold;
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

</style>

<form action="" method="post" class="row form-edit">
    <div class="col-md-6">
        <label for="judul" class="d-flex flex-col">
            <span class="form-label">Name: </span>
            <input class="form-control" type="text" name="judul" id="judul" value="{{ $film->judul }}">
        </label>
        <label for="director" class="d-flex flex-col">
            <span class="form-label">Diector: </span>
            <input class="form-control" type="text" name="director" id="director" value="{{ $film->director }}">
        </label>
        <label for="cast" class="d-flex flex-col">
            <span class="form-label">Cast: </span>
            <input class="form-control" type="text" name="cast" id="cast" value="{{ $film->cast }}">
        </label>
        <label for="minimal_usia" class="d-flex flex-col">
            <span class="form-label">Mminimal_usia: </span>
            <input class="form-control" type="number" min="0" name="minimal_usia" id="minimal_usia" value="{{ $film->minimal_usia }}">
        </label>
        <label for="genre" class="d-flex flex-col">
            <span class="form-label">genre: </span>
            <input class="form-control" type="text" name="genre" id="genre" value="{{ $film->genre }}">
        </label>
        <label for="durasi" class="d-flex flex-col">
            <span class="form-label">durasi: </span>
            <input class="form-control" type="text" name="durasi" id="durasi" value="{{ $film->durasi }}">
        </label>
    </div>
    <div class="col-md-6">
        <label for="jadwal_tayang" class="d-flex flex-col">
            <span class="form-label">Jadwal tayang: </span>
            <input class="form-control" type="date" name="jadwal_tayang" id="jadwal_tayang" value="{{ $film->jadwal_tayang }}">
        </label>
        <label for="trailer" class="d-flex flex-col">
            <span class="form-label">Trailer: </span>
            <input class="form-control" type="url" name="trailer" id="trailer" value="{{ $film->trailer }}">
        </label>
        <label for="sinopsis" class="d-flex flex-col">
            <span>sinopsis: </span>
            <textarea name="sinopsis" id="sinopsis" cols="30" rows="10">{{ $film->sinopsis }}</textarea>
        </label>
        <label for="jam_tayang" class="d-flex flex-col">
            <span class="form-label">Jam Tayang: </span>
            <input class="form-control" type="time" name="jam_tayang" id="jam_tayang" value="{{ $film->jam_tayang }}">
        </label>
        <label for="status" class="d-flex flex-col">
            <span>Status:</span>
            <select name="status" id="status">
                <option value="nowplaying"

                @if ($film->status === "nowplaying")
                    selected
                @endif

                >Now Playing</option>
                <option value="commingsoon"
                >Comming Soon</option>
            </select>
        </label>
        <label for="">
            <span class="form-label">Thumbnile</span>
            <input class="form-control" type="file" name="thumbnile" id="thumbnile" value="{{ $film->thumbnile }}">
        </label>
    </div>
</form>

@endsection


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
