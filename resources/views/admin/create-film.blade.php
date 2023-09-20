@extends('layouts.admin')

 <head>
    {{-- <link rel="stylesheet" href="{{create-detailcomingsoon.css}}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/admin/create-film.css') }}">
</head>

@section('content')
<div class="container col-7 mt-4">
    <div class="row">
        <div class="form-container col-6 ">
            <div class="border-form ">
            <form action="{{ route('uploadfilm') }}" method="POST" enctype="multipart/form-data">
            <!-- Form Tambah Data Film (Form Pertama) -->
                @csrf <!-- Ini digunakan di Laravel untuk melindungi dari serangan CSRF -->

                    <input type="text" id="judul" name="judul" class="input-text" placeholder="Judul" required>
                    <input type="text" id="director" name="director" class="input-text" placeholder="Director"
                    required>
                    <input type="text" id="cast" name="cast" class="input-text" placeholder="Cast">
                    <input type="number" id="minimal_usia" name="minimal_usia" class="input-text"
                    placeholder="Minimal Usia">
                    <input type="text" id="genre" name="genre" class="input-text" placeholder="Genre">
                    <select name="status" id="status" class="input-text" required>
                        <option value="" disabled selected>Pilih</option>
                        <option value="Now Playing">Now Playing</option>
                        <option value="Coming Soon">Coming Soon</option>
                    </select>

                </div>
        </div>

        <div class="form-container col-6 ">
            <div class="border-form p-3">

                <input type="text" id="durasi" name="durasi" class="input-text" placeholder="Durasi"
                required>
                <input type="text" id="video_trailer" name="video_trailer" class="input-text"
                placeholder="Jadwal Tayang" required>

                <input type="url" id="video_trailer" name="video_trailer" class="input-text"
                placeholder="Link Video Trailer" required>
                <textarea name="sinopsis" id="sinopsis" class="input-text" cols="30" rows="5" placeholder="Sinopsis"></textarea>
<br><br>
            </div>
        </div>
        <center>
        <br><br>

            <input type="file" id="foto" name="foto" accept="image/*" class="input-file col-8" required
            style="width: 90%;">

            <button type="button" class="input-submit" style="width: 90%;">Upload</button>
        </center>
    </form>
    </div>
    <!-- Input File dan Tombol Submit di luar form -->

</div>
@endsection
