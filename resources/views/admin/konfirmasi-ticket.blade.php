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

        .gambar-preview {
    cursor: pointer;
    transition: transform 0.2s ease;
}

.gambar-preview:hover {
    transform: scale(1.1);
}

.gambar-preview.enlarged {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    width: auto;
    height: auto;
    max-width: 90%;
    max-height: 90%;
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
                                <th>Bukti Pembayaran</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Isi tabel -->
                            <!-- Contoh baris tabel -->
                            {{-- @dd($orders) --}}
                            @forelse ( $orders as $i => $pesanan )
                            <tr>
                                <th scope="row">{{ $i+1 }}</th>
                                <td>{{ $pesanan->film->judul }}</td>
                                <td>{{ $pesanan->film->jam_tayang }}</td>
                                <td>{{ $pesanan->film->ruangan_id }}</td>
                                <td>
                                    <ol>
                                        @foreach ( $status_kursi as $kursi)
                                            @if ($kursi->ticket_id === $pesanan->ticket->id)
                                            <li>{{ $kursi->nomor_kursi }}</li>
                                            @endif
                                        @endforeach
                                    </ol>
                                </td>
                                @if ($pesanan->bank_id === null && $pesanan->ewallet_id === null)
                                <td>Cash</td>
                                @elseif ($pesanan->bank_id === null)
                                <td>{{ $pesanan->ewallet->ewallet }}</td>
                                @else
                                <td>{{ $pesanan->Bank->bank }}</td>
                                @endif
                                <td>Rp.{{ number_format($pesanan->totalharga) }}</td>
                                <td>
                                    @if ($pesanan->bank_id === null && $pesanan->ewallet_id === null)
                                        <p>Cash</p>
                                    @else
                                    <img class="gambar-preview" style="width: 100px; height: 100px;" src="{{ asset('storage/bukti/' . $pesanan->bukti_pembayaran) }}" alt="">
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('update_konfirmasi','')}}/{{ $pesanan->id }}" method="post">
                                        @csrf
                                        <input id="status" type="hidden" name="status" value="" >
                                        <button onclick="handleStatus('sukses')" type="submit" class="btn ">Konfirmasi</button>
                                        <button onclick="handleStatus('ditolak')" type="submit" class="btn ">Gagal</button>
                                    </form>
                                </td>


                            </tr>
                                @empty

                                @endforelse

                            <!-- Contoh baris tabel lainnya -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function handleStatus(status){
        const inpStatus = document.getElementById('status')
        if(status === "sukses"){
            inpStatus.value = "sukses"
        }else{
            inpStatus.value = "ditolak"
        }
    }
</script>


</html>
@endsection
