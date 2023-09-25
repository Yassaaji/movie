@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>History Pesanan</title>
    <!-- Tambahkan referensi ke CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
  

        .card {
            background-color: #000000; /* Ubah warna latar belakang card menjadi navy */
            color: white; /* Ubah warna teks menjadi putih */
        }

        /* Gaya untuk tombol ruangan */
        .btn-purple {
            background-color: rgb(87, 45, 155);
            color: white; /* Ubah warna teks tombol menjadi putih */
        }

        /* Gaya untuk tabel */
        .table th,
        .table td {
            color: white;
            text-align: center; /* Mengatur teks menjadi di tengah */
        }

        /* Gaya untuk tombol di dalam tabel */
        .table .btn {
            color: white; /* Ubah warna teks tombol menjadi putih */
            border: none; /* Hapus border tombol */
        }

        /* Gaya untuk tabel yang dapat digulir */
        .fixed-table {
            max-height: 300px; /* Tentukan tinggi maksimum untuk membuat tabel digulir jika perlu */
            overflow-y: auto; /* Aktifkan gulir vertikal jika melebihi tinggi maksimum */
        }

    </style>
</head>

<body>
    
    <div class="container">
             <div class="navbar-link-header pt-3 px-5">
            <h3>Karyawan</h3>
            <p>Konfirmasi Ticket</p>
        </div>
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <!-- Tombol Ruangan Teater -->
                <div class="btn-group mt-3" role="group" aria-label="Ruangan Teater">
                    <button type="button" class="btn btn-purple mr-3">A</button>
                    <button type="button" class="btn btn-purple mr-3">B</button>
                    <button type="button" class="btn btn-purple mr-3">C</button>
                </div>

                <!-- Tabel dengan gaya Bootstrap -->
                <div class="table-responsive fixed-table mt-4"> <!-- Tambahkan class .table-responsive -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Film</th>
                                <th scope="col">Jam Tayang</th>
                                <th scope="col">Ruangan</th>
                                <th scope="col">Kursi</th>
                                <th scope="col">Metode Pembayaran</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Isi tabel -->
                            <!-- Contoh baris tabel -->
                            <tr>
                                <th scope="row">1</th>
                                <td>Kakak ku ternyata manusia</td>
                                <td>16.30</td>
                                <td>XI</td>
                                <td>2B</td>
                                <td>ngutang</td>
                                <td>35.000</td>
                                <td>
                                    <button type="button" class="btn ">Konfirmasi</button>
                                    <button type="button" class="btn ">Gagal</button>
                                </td>
                            </tr>
                            <!-- Contoh baris tabel lainnya -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
