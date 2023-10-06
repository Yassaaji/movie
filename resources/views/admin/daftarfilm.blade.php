    @extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Film</title>
    <!-- Add references to CSS Bootstrap and Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- Include SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        body {
            background-color: #333333;
            overflow: hidden;
        }
        .card {
            background-color: #000000;
            color: white;
        }

        .btn-purple {
            background-color: rgb(87, 45, 155);
            color: white;
        }

        .table th{

            color: white;
            text-align: center;
            vertical-align: middle; /* Center content vertically */
        }
        .table td {
            color: white;
            text-align: center;
            vertical-align: middle; /* Center content vertically */
        }
        .table th, .table td {
    padding: 1px; /* Adjust the padding as needed */
    font-size: 14px; /* Adjust the font size as needed */
}
        /* Remove default Bootstrap table borders */
        .table {
            border: none;
        }

        /* Style table header */
        .table thead tr th {
            background-color: #010e1b; /* Dark background color for header */
            border: none;
            padding: 5px; /* Adjust the padding as needed */
            font-size: 14px;

        }

        /* Style table rows alternately */
        .table tbody tr td:nth-child(odd) {
            background-color: #767676; /* Darker background for odd rows */
            height: 30px;
        }

        /* Style buttons in table */
        .table .btn {
            color: white;
            border: none;
        }

        /* Style responsive table */
        .table-responsive {
            overflow-x: auto;
            max-height: 500px;
            max-width: 15000px;
        }

        /* Style image previews */
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
        } .button {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .button button {
        background-color: #06000f;
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
/* Tambahkan CSS untuk membuat tabel responsif */




/* Jika ingin menghilangkan garis horizontal pada sel tabel pada tampilan seluler */
@media screen and (max-width: 767px) {
    .table th, .table td {
        border: none;
    }
}

/* CSS untuk efek hover */
.btn-dark {
    background-color: #343a40; /* Warna latar belakang tombol */
    color: #ffffff; /* Warna teks tombol */
    transition: box-shadow 0.3s, transform 0.3s, color 0.3s; /* Efek transisi untuk bayangan, transformasi, dan warna teks */
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Bayangan awal */
}

.btn-dark:hover {
    background-color: #ffffff; /* Warna latar belakang saat dihover */
    color: #343a40; /* Warna teks saat dihover */
    transform: scale(1.1); /* Perubahan ukuran saat dihover */
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5); /* Bayangan saat dihover */
}
.btn-danger {
    background-color: #ff0000; /* Warna latar belakang tombol */
    color: #ffffff; /* Warna teks tombol */
    transition: box-shadow 0.3s, transform 0.3s, color 0.3s; /* Efek transisi untuk bayangan, transformasi, dan warna teks */
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Bayangan awal */
}

.btn-danger:hover {
    background-color: #ffffff; /* Warna latar belakang saat dihover */
    color: #343a40; /* Warna teks saat dihover */
    transform: scale(1.1); /* Perubahan ukuran saat dihover */
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5); /* Bayangan saat dihover */
}
</style>
<body>

    <div class="container">
        <div class="navbar-link-header pt-3 px-5">
            <h1 style="color: #fff">Karyawan</h1>
            <p style="color: #fff">Daftar Film</p>
        </div>
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <a href="{{ route('film.create') }}" class="btn btn-dark"><i class="fas fa-plus"></i> </a>

                <div class="table-responsive mt-4">
                    <table class="table table-dark table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">DIREKTUR</th>
                                <th scope="col">CAST</th>
                                <th scope="col">MINIMAL USIA</th>
                                <th scope="col">GENRE</th>
                                <th scope="col">DURASI</th>
                                <th scope="col">JAM TAYANG</th>
                                <th scope="col">SINOPSIS</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $films as $i=> $film)
                                    <tr>
                                        <td>{{ $i+1 }} </td>
                                        <td>{{ $film->judul }}</td>
                                        <td>{{ $film->director }}</td>
                                        <td>{{ $film->cast }}</td>
                                        <td>{{ $film->minimal_usia }}</td>
                                        <td>{{ $film->genre->genre }}</td>
                                        <td>{{ $film->durasi }}</td>
                                        <td>{{ $film->jadwal_tayang }}</td>
                                        <td>
                                            <p class="overflow-y-scroll ellipsis" rows="3">{{ $film->sinopsis }}</p>
                                        </td>
                                        <td>{{ $film->status }}</td>
                                        <td><img src="{{ asset('storage/thumbnile/' . $film->thumbnile ) }}" alt="{{ $film->judul }}" height="100px" width="100px"></td>
                                        <div class="button w-25">
                                            <td>
                                                <div class="btn-group " role="group" >
                                                    <form action="{{ route('film.destroy', $film->id) }}" method="post" style="width: 125px;">
                                                        @csrf
                                                        <a href="{{ route('edit-film', $film->id) }}" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> </a>
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" onclick="confirmDelete(event)"><i class="fas fa-trash-alt"></i> </button>
                                                    </form>
                                                </div>
                                            </td>
                                      </div>
                                    </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $films->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevent form submission
        Swal.fire({
            title: 'Apakah anda yakin ingin menghapus data?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user confirms, submit the form
                event.target.closest('form').submit();
            }
        });
    }



</script>

</html>
@endsection
