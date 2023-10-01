<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: #050e26;
            font-family: Arial, sans-serif;
            margin: 0; /* Add this line to remove body margin */
            padding: 0;
        }

        .navbar-link-header {
            background-color: #111;
            color: white;
            padding: 10px;
        }

        .container-fluid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card-menunggu-konfirmasi {
            background-color: #fff;
            border-left: 4px solid #007bff; /* Warna border kiri */
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .text-card {
            font-weight: 700;
        }

    </style>
</head>
<body>
    @extends('layouts.admin')

    @section('content')
        <main class="text-white shadow">
            {{-- HEADER --}}
            <div class="navbar-link-header">
                <h3>Karyawan</h3>
                <p>Dashboard</p>
            </div>

            {{-- CONTENT --}}
            <div class="container-fluid" style="background-color: #050e26">
                <div class="card-menunggu-konfirmasi">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="mb-1 text-card text-uppercase text-black">Menunggu Konfirmasi</p>
                            <p class="h5 mb-0 font-weight-bold text-gray-800">4</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <i class="bi bi-clipboard-check fs-3 text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
</body>
</html>
