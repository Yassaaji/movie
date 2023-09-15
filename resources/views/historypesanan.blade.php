<!DOCTYPE html>
<html>

<head>
    <title>History Pesanan</title>
    <!-- Tambahkan referensi ke CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>

       

        body {
            /* Background Image */
            background-image: url('img/guest_login.jpg');
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
        
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <center><h1>History Pesanan</h1></center>
            </div>
            <div class="card-body">
                <!-- Tombol "Back" -->
                    <a href="http://127.0.0.1:8000/detailfilm" class="btn btn-primary float-right">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                <!-- Tabel dengan gaya Bootstrap -->
                <table class="table">
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
                            <td>Konfirmasi</td>
                            </div>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Upin Ipin</td>
                            <td>22.22</td>
                            <td>XII</td>
                            <td>4B</td>
                            <td>Dana</td>
                            <td>50.000</td>
                            <td>Ditunda</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
