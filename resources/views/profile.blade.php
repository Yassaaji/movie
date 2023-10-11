@extends('layouts.app')
@section('content-app')

    {{-- @dump($data[0]) --}}
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rateyo@2.3.2/dist/jquery.rateyo.min.css">
        <script src="https://cdn.jsdelivr.net/npm/rateyo@2.3.2/dist/jquery.rateyo.min.js"></script>
        <section class="m-profile setting-wrapper" style="background-color:rgb(30, 28, 28);">
            <br><br><br><br><br><br><br>
            <style>
                .edit {
                    opacity: 0;
                    transition: 0.2s;
                }

                .edit:hover {
                    opacity: 100;
                }

                .sign-user_card.dl {
                    max-width: 700px;
                    /* Sesuaikan dengan lebar yang Anda inginkan */
                    justify-content: center;
                }

                body {

                    /* Background Size */
                    background-size: cover;
                    /* Background Position */
                    background-position: center center;
                    /* Background Repeat */
                    background-repeat: no-repeat;
                    /* Height untuk mengisi seluruh layar */
                    height: 80vh;

                }

                /* Tambahkan gaya tambahan sesuai kebutuhan Anda */
                .container {
                    margin-top: 20px;
                    color: rgb(253, 253, 253);
                }

                .table {
                    width: 95%;
                    border-collapse: collapse;
                    border-spacing: 0;
                }

                .table {
                    margin-top: 20px;
                    /* Anda bisa mengurangi atau meningkatkan nilai ini sesuai kebutuhan */

                }

                .table th,
                .table td {
                    padding: 8px;
                    text-align: center;
                }

                .table th {
                    background-color: #333;
                    color: #fff;
                }

                .table td {
                    background-color: #f2f2f2;
                }

                /* Styling untuk badge */
                .badge {
                    padding: 5px 10px;
                    border-radius: 20px;
                    font-size: 14px;
                    font-weight: bold;
                }

                .badge-secondary {
                    background-color: #555;
                    color: #fff;
                }

                .badge-success {
                    background-color: #28a745;
                    color: #fff;
                }

                .badge-warning {
                    background-color: #ffc107;
                    color: #333;
                }

                .badge-danger {
                    background-color: #dc3545;
                    color: #fff;
                }

                .rating {
                    font-size: 24px;
                    color: gray;
                    /* Warna awal bintang */
                }

                .rating i {
                    cursor: pointer;
                }
                .btn-light {
                    background-color: #b2b2b5;
                    /* Warna latar belakang tombol */
                    color: #ffffff;
                    /* Warna teks tombol */
                    transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
                    /* Efek transisi untuk bayangan, transformasi, dan warna teks */
                    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                    /* Bayangan awal */
                }

                .btn-light:hover {
                    background-color: #ffffff;
                    /* Warna latar belakang saat dihover */
                    color: #343a40;
                    /* Warna teks saat dihover */
                    transform: scale(1.1);
                    /* Perubahan ukuran saat dihover */
                    box-shadow: 4px 4px 10px rgba(230, 227, 227, 0.5);
                    /* Bayangan saat dihover */
                }

                </style>
                </head>
                <button type="submit" class="btn btn-light" style="margin-left: 100px;" >
                    <a href="{{ url('nowplaying') }}" style="text-decoration: none; color:#000000;">kembali</a>
                </button>

            <div class="container" style="margin-bottom: 200px:">
                <h4 class="main-title mb-8  user " style="color: #fff"></h4>
                <div class="row">
                    <a href="{{ route('profile.edit', Auth::user()->id) }}">
                        <div class="col-lg-4 mb-3 d-flex justify-content-center align-items-center" style="background-color: #b7afaf">
                            <div class="img-container">
                                <img style="
                                width: 245px;
                                height: 245px;
                                border-radius: 100%;
                                margin-bottom: 28px;
                                margin-right: 5px;
                            "
                                    class="object-fit-cover"
                                    @if (Auth::user()->fotoprofil === 'default.jpg') src="{{ asset('storage/' . Auth::user()->fotoprofil) }}"
                            @else
                            src="{{ asset('storage/profile/' . $data[0]->fotoprofil) }}" @endif
                                    loading="lazy">
                                <p style="position: absolute;z-index:10;font-size: 100px;
                               "
                                    class="edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        viewBox="0 0 24 24">
                                        <path fill="#888888"
                                            d="m18.988 2.012l3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287l-3-3L8 13z" />
                                        <path fill="#888888"
                                            d="M19 19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z" />
                                    </svg>
                                </p>
                            </div>
                    </a>
                </div>

                <div class="col-lg-8 ml-12">
                    <center>
                        <div class="sign-user_card dl">
                        <h5 class="mb-4 pb-3 a-border besar" style="color: black">DETAIL PROFIL PENGGUNA</h5>
                        <div class="row mb-4">
                            <div class="col-md-2">
                                <span class="text font-size-13 kecil">Nama</span>
                            </div>
                            <div class="col-md-9">
                                <p class="mb-0 kecil with-border">{{ $data[0]->name }}</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-2">
                                <span class="text font-size-13 kecil ">Email</span>
                            </div>
                            <div class="col-md-9">
                                <p class="mb-0 kecil with-border">{{ $data[0]->email }}</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-2">
                                <span class="text font-size-13 kecil ">No.Hp</span>
                            </div>
                            <div class="col-md-9">
                                <p class="mb-0 kecil with-border">{{ $data[0]->noTelp }}</p>
                            </div>
                        </div>
                    </div>
                        </center>
                </div>

    <body>
        <div class="container mb-5 ">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h1><strong>Histori Pemesanan</strong></h1>
                    </center>
                </div>
                <div class="card-body">
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
                                <th scope="col" class="text-center">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($historypesanan as $i => $pesanan)
                                    <th scope="row" class="text-center">{{ $i + 1 }}</th>
                                    <td class="text-center">{{ $pesanan->film->judul }}</td>
                                    <td class="text-center">{{ $pesanan->film->jam_tayang }}</td>
                                    <td class="text-center">{{ $pesanan->film->ruangan_id }}</td>
                                    <td clsdd="text-center">
                                        <ol>
                                            @foreach ($kursiPesanan as $kursi)
                                                @if ($kursi->status_kursi[0]->ticket_id === $pesanan->ticket->id)
                                                    <li>{{ $kursi->nomor_kursi }}</li>
                                                @endif
                                            @endforeach
                                        </ol>
                                    </td>
                                    @if ($pesanan->bank_id === null && $pesanan->ewallet_id === null)
                                        <td class="text-center">Cash</td>
                                    @elseif ($pesanan->bank_id === null)
                                        <td class="text-center">{{ $pesanan->ewallet->ewallet }}</td>
                                    @else
                                        <td class="text-center">{{ $pesanan->Bank->bank }}</td>
                                    @endif

                                    <td class="text-center">{{ $pesanan->totalharga }}</td>
                                    <td class="text-center">
                                        <span class="badge badge-secondary">{{ $pesanan->konfirmasi }}</span>
                                    </td>
                                    <td>
                                        {{-- <button style="background: none; border: none; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#ratingModal{{ $pesanan->id }}">
                                <i class="fas fa-star" style="font-size: 24px; color: gold;"></i>
                            </button> --}}
                                        @if($pesanan->konfirmasi === "sukses")
                                        <button type="button" class="btn-success" data-bs-toggle="modal"
                                            data-bs-target="#ratingModal{{ $pesanan->id }}">
                                            <i class="fas fa-star" style="font-size: 24px; color: gold;"></i>
                                        </button>
                                        @else
                                       
                                        @endif
                                        <!-- Bootstrap Modal -->
                                        <div class="modal fade" id="ratingModal{{ $pesanan->id }}" tabindex="-1"
                                            aria-labelledby="ratingModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ratingModalLabel{{ $pesanan->id }}"Beri rating dulu
                                                            yuk!!!</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <center>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <form action="{{ route('rate',$pesanan->film->id) }}" method="post">
                                                                    @csrf
                                                                    <!-- Your rating inputs and other content -->
                                                                    <div class="image-container">
                                                                    <img class="image"
                                                                        src="{{ asset('storage/thumbnile' . $pesanan->film->thumbnile) }}"
                                                                        alt="Film" height="100px" width="100px">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h2 class="card-title text-center"
                                                                            style="color: rgb(0, 0, 0);">
                                                                            {{ $pesanan->film->judul }}</h2>
                                                                        <div class="data">
                                                                            <p style="color: rgb(0, 0, 0);"><strong>Durasi
                                                                                    :</strong>{{ $pesanan->film->durasi }}
                                                                                </p>
                                                                            <p style="color: rgb(0, 0, 0);">
                                                                                <strong>Direktur :</strong>
                                                                                {{ $pesanan->film->director }}
                                                                            </p>
                                                                            <p style="color: rgb(0, 0, 0);"><strong>Casts
                                                                                :</strong>{{ $pesanan->film->cast }}
                                                                            </p>
                                                                        </div>

                                                                        <input type="hidden" name="rate" id="rate" value="">
                                                                        <label class="rating">
                                                                            @if ($user->rate->isEmpty()) <!-- Memeriksa apakah user belum memberikan rating -->
                                                                                @for ($i = 0; $i < 5; $i++)
                                                                                    <i style="" class="fas fa-star" onclick="setRating('{{ $i+1 }}')"></i>
                                                                                @endfor
                                                                            @else
                                                                                @php
                                                                                    $previousRating = $user->rate->where('film_id', $pesanan->film->id)->first(); // Mendapatkan rating sebelumnya
                                                                                @endphp
                                                                                @for ($i = 0; $i < 5; $i++)
                                                                                    @if ($i < floor($previousRating->rate))
                                                                                        <i style="color: yellow" class="fas fa-star" onclick="setRating('{{ $i+1 }}')"></i>
                                                                                    @else
                                                                                        <i class="fas fa-star" onclick="setRating('{{ $i+1 }}')"></i>
                                                                                    @endif
                                                                                @endfor
                                                                            @endif
                                                                        </label>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </center>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-dark">Kirim</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Include Bootstrap JS -->
                                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                                            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                                        </script>
                                        <script>
                                            function setRating(rating) {
                                                // document.get
                                                document.getElementById('rate').value = rating;
                                                // Mengatur warna bintang sesuai dengan rating yang diberikan
                                                for (let i = 1; i <= 5; i++) {
                                                    const star = document.querySelector('.rating i:nth-child(' + i + ')');
                                                    if (i <= rating) {
                                                        // document.getElementById('rate').value = i;
                                                        star.style.color = 'gold';
                                                    } else {
                                                        star.style.color = 'gray';
                                                        // document.getElementById('rate').value = i;
                                                    }
                                                }
                                            }

                                        </script>
                                    </td>
                            </tr>

                        @empty
                            @endforelse

                        </tbody>
                    </table>
                    <br><br><br>
                </div>

    </html>

@endsection
