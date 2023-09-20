@extends('layouts.admin')

@section('content')
    <style>
         body {
        font-family: Arial, sans-serif;
        background-color: rgb(78, 73, 72);
    }

    .text {
        padding-left: 100px;
        color: #ffffff;
        margin-top: 40px;
    }

    h1 {
        color: #fff6f6;
    }

    .p {
        width: 300px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .table-container {
        margin-top: 200px;

    }

    /* Style tabel sesuai kebutuhan Anda */
    .table {
        width: 90%;
        height: 20%;
        color: #ffffff;
    }

    .table th,
    .table td {
        text-align: center;
        padding: 5px;
    }

    .table th {
        background-color: #333;
    }

    .table tr:nth-child(even) {
        background-color: #444;
    }

    .table tr:nth-child(odd) {
        background-color: #555;
    }

    .table th, .table td {
        border: 1px solid #777;
    }

    .table img {
        max-width: 90px;
    }

    .button {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .button button {
        background-color: #333;
        color: #ffffff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    .button button:hover {
        background-color: #555;
    }


      </style>
</head>

<br><br><br>
    <div class="text">
        <h1>Karyawan</h1>
        <div class="p">
        <p>Delete / Now Playing</p>
    </div>
    </div>

    <div class="table-container" style="margin-left: -25%;">
        <table class="table table-dark table-striped">
            <div>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Direktur</th>
                <th>Cast</th>
                <th>Minimal Usia</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Jam Tayang</th>
                <th>Sinopsis</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>

            @forelse ( $films as $i=> $film )

            <tr>
                <td>{{ $i+1 }} </td>
                <td>{{ $film->judul }}</td>
                <td>{{ $film->director }}</td>
                <td>{{ $film->cast }}</td>
                <td>{{ $film->minimal_usia }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->durasi }}</td>
                <td>{{ $film->jadwal_tayang }}</td>
                <td>
                    <p class="overflow-y-scroll" rows="3">{{ $film->sinopsis }}</p>
                </td>
                <td><img src="{{ asset('storage/thumbnile/' . $film->thumbnile ) }}" alt="{{ $film->judul }}"></td>
                <div class="button">
                    <td>
                        <button class="btn btn-dark">Edit</button>

                        <button class="btn btn-dark" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </td>
              </div>
            </tr>

            @empty

            @endforelse


        </table>
    </div>

    @endsection

