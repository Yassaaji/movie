<!DOCTYPE html>
<html>
    <head>
        <title>History Pesanan</title>
        <!-- Tambahkan referensi ke CSS Bootstrap -->
        <link
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            rel="stylesheet"
        />

        <style>
            body {
                /* Background Image */
                background-image: url("img/guest_login.jpg");
                /* Background Size */
                background-size: cover;
                /* Background Position */
                background-position: center center;
                /* Background Repeat */
                background-repeat: no-repeat;
                /* Height untuk mengisi seluruh layar */
                height: 100vh;
            }

            /* Tambahkan gaya tambahan sesuai kebutuhan Anda */
            .container {
                margin-top: 20px;
                color: rgb(253, 253, 253);
            }

            .table th,
            .table td {
                color: white;
            }

            .card {
                background-color: black;
                color: white;
            }
                        /* Tambahkan definisi warna ungu */
            .btn-purple {
                background-color: rgb(46, 15, 46);
                color: white; /* Mengganti warna teks menjadi putih agar terlihat jelas */
            }

        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h1>Konfirmasi Pesanan Tiket</h1>
                    </center>
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
<table class="table">
    <thead>
        <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">Film</th>
            <th scope="col" class="text-center">Jam Tayang</th>
            <th scope="col" class="text-center">Ruangan</th>
            <th scope="col" class="text-center">Kursi</th>
            <th scope="col" class="text-center">Metode Pembayaran</th>
            <th scope="col" class="text-center">Total Harga</th>
            <th scope="col" class="text-center">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row" class="text-center">1</th>
            <td class="text-center">Kakak ku ternyata manusia</td>
            <td class="text-center">16.30</td>
            <td class="text-center">XI</td>
            <td class="text-center">2B</td>
            <td class="text-center">ngutang</td>
            <td class="text-center">35.000</td>
            <td class="text-center">
            <button type="button" class="btn btn-secondary">Konfirmasi</button>
            <button type="button" class="btn btn-secondary"> Gagal </button>
                        </td>
                    </tr>
                </tbody>
            </table>  
                </div>
            </div>
        </div>
    </body>
</html>
