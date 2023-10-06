@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Create Film</title>
    <!-- Tambahkan referensi ke CSS Bootstrap dan CSS khusus Anda -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/admin/create-film.css') }}">
    <style>
        body{
            background-color:rgb(0, 4, 15);
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h4 class="text-center" style="font-family: 'Poppins', sans-serif; font-weight: bold; color:#fff; "; >Tambah Film</h4>
        <br>
        <div class="row">
            <div class="col-4">
                <div class="border-form">
                    <form action="{{ route('uploadfilm') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for=""></label>
                        <input type="text" id="judul" name="judul" class="input-text" placeholder="Judul" value="{{ old('judul') }}">
                        @error('judul')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                        <input type="text" id="director" name="director" class="input-text" placeholder="Director" value="{{ old('director') }}">
                        @error('director')
                        <p class="text-danger">{{ $message}}</p>
                         @enderror
                        <input type="text" id="cast" name="cast" class="input-text" placeholder="Cast" value="{{ old('cast') }}" >
                        @error('cast')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                        <input type="number" id="minimal_usia" name="minimal_usia" class="input-text"
                            placeholder="Minimal Usia" min="0" value="{{ old('minimal_usia') }}">
                            @error('minimal_usia')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                        <select name="genre" id="genre" class="input-text" value="{{ old('genre') }}">
                            <option value="" disabled selected>Genre</option>
                            @foreach ($genre as $data)
                            <option value="{{ $data->id }}">{{ $data->genre }}</option>
                            @endforeach
                        </select>
                        @error('genre')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                        <select name="status" id="status" class="input-text" value="{{ old('status') }}">
                            <option value="" disabled selected>Status</option>
                            <option value="nowplaying">Now Playing</option>
                            <option value="commingsoon">Coming Soon</option>
                        </select>
                        @error('status')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="border-form p-3">
                        <input type="number" id="durasi" name="durasi" class="input-text" placeholder="Durasi" value="{{ old('durasi') }}" >
                        @error('durasi')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                        <input type="date" id="jadwal_tayang" name="jadwal_tayang" class="input-text"
                            placeholder="Jadwal Tayang" value="{{ old('jadwal_tayang') }}">
                            @error('jadwal_tayang')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                        <input type="url" id="trailer" name="trailer" class="input-text"
                            placeholder="Link Video Trailer" value="{{ old('trailer') }}">
                            @error('trailer')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                        <textarea name="sinopsis" id="sinopsis" class="input-text" cols="30" rows="3"
                            placeholder="Sinopsis"value="{{ old('sinopsis') }}"></textarea>
                            @error('sinopsis')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="border-form p-3">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: bold; color:#ffffff;">Tiket</h3>
                        <label for="ruangan" style="color: #fff">Ruangan:</label> <br>
                        <select name="ruangan" id="ruangan" value="{{ old('ruangan') }}">
                            <option value="" disabled selected>Pilih</option>
                            <option value="A">Ruang A</option>
                            <option value="B">Ruang B</option>
                            <option value="C">Ruang C</option>
                        </select>
                        @error('ruangan')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                        <br><br>
                        <label for="jam_tayang" style="color: #fff">Jam Tayang:</label>
                        <input type="time" id="jam_tayang" name="jam_tayang" class="input-text" placeholder="Jam Tayang" value="{{ old('jam_tayang') }}">
                        @error('jam_tayang')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                        {{-- <input type="text" id="kursi" name="kursi" class="input-text" placeholder="Kursi" > --}}
                        <input type="number" id="harga" name="harga" class="input-text" placeholder="Harga" min="0" value="{{ old('harga') }}">
                        @error('harga')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                    </div>
                </div>
            </div>

            <center>
                <br><br>
                <input type="file" id="thumbnail" name="thumbnile" accept="image/*" class="input-file " required
                    style="width: 90%;" value="{{ old('image') }}">
                <button type="submit" class="input-submit" style="width: 90%;">Upload</button>
            </center>
        </form>
    </div>
</body>


</html>
@endsection
