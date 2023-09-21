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
        /* Gaya untuk card */
        .card {
            background-color: rgb(0, 0, 0); /* Ubah warna latar belakang card menjadi navy */
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
        

    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Konfirmasi Pesanan Tiket</h1>
            </div>
            <div class="card-body">
                <!-- Tombol Ruangan Teater -->
                <div class="btn-group mt-3" role="group" aria-label="Ruangan Teater">
                    <button type="button" class="btn btn-purple mr-2">XI</button>
                    <button type="button" class="btn btn-purple mr-2">XII</button>
                    <button type="button" class="btn btn-purple mr-2">XIII</button>
                    <button type="button" class="btn btn-purple">XIV</button>
                </div>

                <!-- Tabel dengan gaya Bootstrap -->
                
                <table class="table table-dark mt-4  fixed-table">
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
                        </tr><tr>
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
                        </tr><tr>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
