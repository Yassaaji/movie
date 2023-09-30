@extends('layouts.admin')

@section('content')
<script>
    // Fungsi untuk menampilkan alert saat tombol Edit diklik
    function showAlertEdit() {
        alert("Tombol Edit diklik!");
    }

    // Fungsi untuk menampilkan konfirmasi saat tombol Hapus diklik
    function confirmDelete() {
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            // Jika pengguna mengkonfirmasi, lanjutkan dengan penghapusan
            alert("Data telah dihapus.");
            // Tempatkan kode penghapusan di sini
        } else {
            // Jika pengguna membatalkan, tidak ada tindakan yang diambil
            alert("Penghapusan dibatalkan.");
        }
    }
</script>
    <style>
         body {
        font-family: Arial, sans-serif;
        background-color: rgb(53, 53, 53);
    }

    .text {
        padding-left: 100px;
        color: #ffffff;
        margin-top: 30px;
    }


    h1 {
        color: #fff6f6;
    }

    .p {
        width: 300px;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .table-container {
        margin-top: 190px;
        width: 680px;
        margin-left: 3000000px;

    }

    /* Style tabel sesuai kebutuhan Anda */
    .table {
        width: 60%; /* Ubah persentase sesuai kebutuhan Anda */
        height: 1%;
        padding: 40px;
        color: #ffffff;
    }

    .table th,
    .table td {
        text-align: center;
        padding: 10px;
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
    display: inline-block;
    padding: 10px 20px;
    border: none;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 5px;
    background-color: transparent;
    color: #fff;
    font-size: 16px;
    overflow: hidden;
    position: relative;
    transition: background-color 0.3s, transform 0.3s;
}

.button:hover {
    background-color: #a5a5a5;
    transform: scale(1.05);
}

.button:after {
    content: "";
    background: rgba(255, 255, 255, 0.2);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    width: 0;
    height: 0;
    opacity: 0;
    transition: width 0.3s ease-out, height 0.3s ease-out, opacity 0.3s;
}

.button:hover:after {
    width: 100px;
    height: 100px;
    opacity: 1;
}

.edit-button {
    border: 1px solid #333333;
}

.delete-button {
    border: 1px solid #333333;
    color: #ffffff;
}

.delete-button:hover {
    background-color: #a5a5a5;
    color: #fff;
}

    .pagination .page-item {
        margin: 0 5px; /* Jarak antara item pagination */
    }

    .pagination .page-item.active .page-link {
        background-color: #007BFF; /* Warna latar belakang item aktif */
        border-color: #007BFF; /* Warna border item aktif */
    }

    .pagination .page-link {
        color: #007BFF; /* Warna teks item pagination */
    }

    .ellipsis{
    text-overflow: ellipsis!important;
    overflow: hidden!important;
    -webkit-line-clamp: 5!important;
    -webkit-box-orient: vertical!important;
    display: -webkit-box!important;
    word-break: break-word!important;
}
/* Tombol Tambah */
.add-button {
    display: inline-block;
    height: 40px;

    border: none;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 5px;
    background-color: #949494; /* Warna latar belakang tombol Tambah */
    color: #000000; /* Warna teks tombol Tambah */
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s;
}

.add-button:hover {
    background-color: #b9b6b6; /* Warna latar belakang saat tombol dihover */
    transform: scale(1.05); /* Efek scaling saat tombol dihover */
}


      </style>
</head>

<br><br>
    {{-- <div class="text">
        <h1>Karyawan</h1>
        <div class="p">
        <p></p>
    </div> --}}
     <div class="text">
        <h1 style="color: #ffffff; font-size: 36px; text-transform: uppercase; text-shadow: 2px 2px 4px rgba(255, 253, 253, 0.6);">Daftar Film</h1>
        <div class="p">
            <p style="font-size: 20px; color: #ebe7e7;">Delete / Now Playing</p>
        </div>
        <a class="button btn add-button" href="{{ route('tambahfilm')}}" >Tambah</a>
    </div>



    <div class="table-container" style="margin-left: -30%;">
        <table class="table table-dark table-striped" style="width: 140%;">
            <div>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Direktur</th>
                <th>Cast</th>
                <th>Minimal Usia</th>
                <th>Genre</th>
                <th>Durasi</th>
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

                <td>
                    <p class="overflow-y-scroll ellipsis" rows="3">{{ $film->sinopsis }}</p>
                </td>
                <td><img src="{{ asset('storage/thumbnile/' . $film->thumbnile ) }}" alt="{{ $film->judul }}"></td>
                <td>
                    <a class="button btn edit-button" href="{{ route('edit-film','')}}/{{$film->id}}" onclick="showAlertEdit()">Edit</a>
                    <form action="{{ route('film.destroy', $film->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="button btn delete-button" onclick="confirmDelete()">Hapus</button>
                    </form>
                </td>

            </tr>



            @empty

            @endforelse
        </table>
        <nav aria-label="Page navigation example">
        <ul class="pagination">
            <a class="page-link" href="{{ route('daftarfilm', ['page' => $films->currentPage() - 1]) }}">Previous</a>
            <a class="page-link" href="{{ route('daftarfilm', ['page' => $films->currentPage() + 2]) }}">Next</a>
        </ul>
      </nav>

    </div>

    @endsection

