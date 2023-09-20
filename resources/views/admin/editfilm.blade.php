@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Film</title>
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

<body>

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
                <th>Cash</th>
                <th>Minimal Usia</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Jam Tayang</th>
                <th>Sinopsis</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Spiderman
                    vs Everybody</td>
                <td>Marcquez</td>
                <td>Marcquez,
                    Rosi</td>
                <td>15 tahun</td>
                <td>Superhero</td>
                <td>1 jam 50 menit</td>
                <td>14:30</td>
                <td>A battle royale...</td>
                <td>Foto</td>
                <div class="button">
                    <td>
                        <button class="btn btn-dark" onclick="return confirm('Apakah anda yakin?')">Edit</button>

                        <button class="btn btn-dark" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </td>
              </div>
            </tr>
        </table>
    </div>

    @endsection
</body>

</html>

