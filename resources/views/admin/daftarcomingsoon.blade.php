@extends('layouts.admin')

@section('content')
    <style>
         body {
        font-family: Arial, sans-serif;
        background-color: rgb(78, 73, 72);
    }

    .text {
        padding-left: 100px;
        color: #ffffff;
        margin-top: 40px;
    }

    h1 {
        color: #fff6f6;
    }

    .p {
        width: 300px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .table-container {
        margin-top: 200px;
        width: 580px;

    }

    /* Style tabel sesuai kebutuhan Anda */
    .table {
        width: 100px; /* Ubah persentase sesuai kebutuhan Anda */
    height: 5%;
        color: #ffffff;
    }

    .table th,
    .table td {
        text-align: center;
        padding: 5px;
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
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .button button {
        background-color: #333;
        color: #ffffff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    .button button:hover {
        background-color: #555;
    }
    .pagination {
        justify-content: center;
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

      </style>
</head>

<br><br><br>
    <div class="text">
        <h1>Karyawan</h1>
        <div class="p">
        <p>Delete / Coming Soon</p>
    </div>
    <a href="{{ route('create-comingsoon') }}" class="btn btn-info ">+ Tambah</a>
    </div>
    <div class="table-container" style="margin-left: -35%;">
        <table class="table table-dark table-striped" style="width: 30%;">
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
                <td>{{ $i+1 }} </td>
                <td>{{ $film->judul }}</td>
                <td>{{ $film->director }}</td>
                <td>{{ $film->cast }}</td>
                <td>{{ $film->minimal_usia }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->durasi }}</td>
                <td>{{ $film->jadwal_tayang }}</td>
                <td>
                    <p class="overflow-y-scroll ellipsis" rows="3">{{ $film->sinopsis }}</p>
                </td>
                <td><img src="{{ asset('storage/thumbnile/' . $film->thumbnile ) }}" alt="{{ $film->judul }}"></td>
                <div class="button">
                    <td>
                        <a href="{{ route('edit-film','')}}/{{$film->id}}" class="btn btn-dark">Edit</a>
                        <form action="{{ route('film.destroy', $film->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-dark" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                        </form>
                    </td>
              </div>
            </tr>



            @empty

            @endforelse
        </table>
        <nav aria-label="Page navigation example">
        <ul class="pagination">
            <a class="page-link" href="{{ route('daftarcomingsoon', ['page' => $films->currentPage() - 1]) }}">Previous</a>
            <a class="page-link" href="{{ route('daftarcomingsoon', ['page' => $films->currentPage() + 1]) }}">Next</a>
        </ul>
      </nav>
        {{-- <div class="pagination">
            {{ $films->links() }}
        </div> --}}
    </div>

    @endsection
