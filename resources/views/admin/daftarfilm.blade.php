@extends('layouts.admin')

@section('content')
    <style>
        body {
          font-family: Arial, sans-serif; /* Ganti dengan jenis font yang Anda sukai */
          background-color: rgb(78, 73, 72);
      }
      .text {
          padding-left: 100px;
          color: #ffffff; /* Ganti dengan warna yang Anda sukai */
          margin-top: 40px;
      }
      h1 {
          color: #fff6f6; /* Warna judul */

      }

      .p{
          width: 300px;
          font-family:Arial, Helvetica, sans-serif;
      }
      .table-container {
            margin-top: 40px;
            text-align: right; /* Menggeser tabel ke kanan */
        }


      /* Style tabel sesuai kebutuhan Anda */
      .table {
          width: 83%;
          margin-top: 150px; /* Jarak antara tabel dan p */
          margin-left: 0;
          color: #ffffff; /* Warna teks dalam tabel */
      }

      .th, .td {
          text-align: center;
          padding: 8px;
      }
      .td button {
        margin-bottom: 100px; /* Sesuaikan nilai margin sesuai kebutuhan Anda */
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
                <td>{{ $i+1 }}</td>
                <td>{{ $film->judul }}</td>
                <td>{{ $film->director }}</td>
                <td>{{ $film->cast }}</td>
                <td>{{ $film->minimal_usia }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->durasi }}</td>
                <td>{{ $film->jadwal_tayang }}</td>
                <td>{{ $film->sinopsis }}</td>
                <td><img src="{{ asset('storage/thumbnile/' . $film->thumbnile ) }}" alt="{{ $film->judul }}"></td>
                <div class="button">
                    <td>
                        <button class="btn btn-dark" onclick="return confirm('Apakah anda yakin?')">Edit</button>

                        <button class="btn btn-dark" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </td>
              </div>
            </tr>

            @empty

            @endforelse


        </table>
    </div>

    @endsection

