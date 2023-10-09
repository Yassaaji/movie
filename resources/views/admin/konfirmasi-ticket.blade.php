@extends('layouts.admin')

@section('content')
  <!DOCTYPE html>
  <html>

  <head>
    <title>Konfirmasi Tiket</title>
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

      .table th {

        color: white;
        text-align: center;
        vertical-align: middle;
        /* Center content vertically */
      }

      .table td {
        color: white;
        text-align: center;
        vertical-align: middle;
        /* Center content vertically */
      }

      .table th,
      .table td {
        padding: 1px;
        /* Adjust the padding as needed */
        font-size: 14px;
        /* Adjust the font size as needed */
      }

      /* Remove default Bootstrap table borders */
      .table {
        border: none;
      }

      /* Style table header */
      .table thead tr th {
        background-color: #010e1b;
        /* Dark background color for header */
        border: none;
        padding: 5px;
        /* Adjust the padding as needed */
        font-size: 14px;

      }

      /* Style table rows alternately */
      .table tbody tr td:nth-child(odd) {
        background-color: #767676;
        /* Darker background for odd rows */
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
        max-height: 700px;
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
      }

      .button {
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
        margin: 0 5px;
        /* Jarak antara item pagination */
      }

      .pagination .page-item.active .page-link {
        background-color: #007BFF;
        /* Warna latar belakang item aktif */
        border-color: #007BFF;
        /* Warna border item aktif */
      }

      .pagination .page-link {
        color: #007BFF;
        /* Warna teks item pagination */
      }

      .ellipsis {
        text-overflow: ellipsis !important;
        overflow: hidden !important;
        -webkit-line-clamp: 5 !important;
        -webkit-box-orient: vertical !important;
        display: -webkit-box !important;
        word-break: break-word !important;
      }

      /* Tambahkan CSS untuk membuat tabel responsif */




      /* Jika ingin menghilangkan garis horizontal pada sel tabel pada tampilan seluler */
      @media screen and (max-width: 767px) {

        .table th,
        .table td {
          border: none;
        }
      }

      /* Mengatur lebar dan tinggi modal */
      .modal {
        max-width: 600px;
        /* Sesuaikan lebar modal sesuai kebutuhan Anda */
        margin: 0 auto;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      /* Mengatur tampilan textarea agar sesuai dengan modal */
      #alasan {
        width: 100%;
        height: 100%;
        resize: none;
        /* Mencegah pengguna untuk mengubah ukuran textarea */
      }

      /* Mengatur tampilan footer modal */
      .modal-footer {
        text-align: right;
        /* Menggeser tombol ke kanan */
      }

      .btn-dark {
        background-color: #343a40;
        /* Warna latar belakang tombol */
        color: #ffffff;
        /* Warna teks tombol */
        transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
        /* Efek transisi untuk bayangan, transformasi, dan warna teks */
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        /* Bayangan awal */
      }

      .btn-dark:hover {
        background-color: #ffffff;
        /* Warna latar belakang saat dihover */
        color: #343a40;
        /* Warna teks saat dihover */
        transform: scale(1.1);
        /* Perubahan ukuran saat dihover */
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
        /* Bayangan saat dihover */
      }

      .btn-danger {
        background-color: #ff0000;
        /* Warna latar belakang tombol */
        color: #ffffff;
        /* Warna teks tombol */
        transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
        /* Efek transisi untuk bayangan, transformasi, dan warna teks */
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        /* Bayangan awal */
      }

      .btn-danger:hover {
        background-color: #ffffff;
        /* Warna latar belakang saat dihover */
        color: #343a40;
        /* Warna teks saat dihover */
        transform: scale(1.1);
        /* Perubahan ukuran saat dihover */
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
        /* Bayangan saat dihover */
      }
    </style>

  <body>

    <div class="container">
      <div class="navbar-link-header pt-3 px-5">
        <h1 style="color: #fff">Karyawan</h1>
        <p style="color: #fff">Konfirmasi Tiket</p>
      </div>
      <div class="card" style="margin-left: 10px; width: 90%;">
        <div class="card-header"></div>
        <div class="card-body">

          <div class="table-responsive mt-4 ">
            <table class="table table-dark table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Film</th>
                  <th scope="col">Jam Tayang</th>
                  <th scope="col">Studio</th>
                  <th scope="col">Kursi</th>
                  <th scope="col">Metode Pembayaran</th>
                  <th scope="col">Total Harga</th>
                  <th scope="col">Bukti Pembayaran</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>

              <tbody>
                @forelse ($orders as $i => $pesanan)
                  <tr>
                    <td scope="row">{{ $i + 1 }}</td>
                    <td>{{ $pesanan->film->judul }}</td>
                    <td>{{ $pesanan->film->jam_tayang }}</td>
                    <td>{{ $pesanan->film->ruangan_id }}</td>
                    <td>
                      <ol>
                        @foreach ($status_kursi as $kursi)
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
                        <img class="gambar-preview" style="width: 100px; height: 100px;"
                          src="{{ asset('storage/bukti/' . $pesanan->bukti_pembayaran) }}" alt="">
                      @endif
                    </td>
                    <td>

                      {{-- <button  class="btn" data-bs-toggle="modal" data-bs-target="#konfirmasiModal.{{$pesanan->id}}">Tolak</button> --}}
                      <form action="{{ route('update_konfirmasi', '') }}/{{ $pesanan->id }}" method="post">
                        @csrf
                        <input id="status" type="hidden" name="status" value="">


                        <div class="modal fade" id="konfirmasiModal.{{ $pesanan->id }}" tabindex="-1"
                          aria-labelledby="konfirmasiModalLabel.{{ $pesanan->id }}" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="konfirmasiModalLabel.{{ $pesanan->id }}">Konfirmasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <span style="float: left">Berikan Alasanya: </span>
                                <textarea class="form-control" name="alasan" id="alasan" cols="10" style="border: #333333 2px solid" autofocus required>
                                        @if ($errors->has('alasan'))
                                    <span class="text-danger">{{ $errors->first('alasan') }}</span>
                                @endif

                                                        </textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-dark" name="status" value="ditolak">Submit</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button onclick="handleStatus('sukses')" type="submit" class="btn btn-dark"><i
                            class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                          data-bs-target="#konfirmasiModal.{{ $pesanan->id }}"><i class="fas fa-times"></i></button>

                      </form>

                    </td>
                  </tr>
                @empty
                  <tr>
                    <td scope="col">kosong</td>
                    <td scope="col">kosong</td>
                    <td scope="col">kosong</td>
                    <td scope="col">kosong</td>
                    <td scope="col">kosong</td>
                    <td scope="col">kosong</td>
                    <td scope="col">kosong</td>
                    <td scope="col">kosong</td>
                    <td scope="col">kosong</td>
                  </tr>
                @endforelse
              </tbody>
            </table>

            <nav aria-label="Page navigation example">
              <ul class="pagination">
                {{ $orders->links('pagination::bootstrap-5') }}
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    var buttonSubmit = document.getElementById('buttonSubmit');
    var isSubmitting = false;

    buttonSubmit.addEventListener('click', function(event) {
      if (isSubmitting) {
        event.preventDefault(); // Mencegah tindakan default tombol jika sedang dalam proses submit
        return;
      }

      isSubmitting = true;
      buttonSubmit.disabled = true;

      // Simulasi proses submit (Anda dapat menggantinya dengan logika pengiriman data ke server)
      setTimeout(function() {
        // Setelah selesai submit atau proses, mengaktifkan kembali tombol
        isSubmitting = false;
        buttonSubmit.disabled = false;
      }, 2000); // Ganti 2000 dengan waktu jeda yang diinginkan (dalam milidetik)
    });

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




    function handleStatus(status) {
      const inpStatus = document.getElementById('status')
      if (status === "sukses") {
        inpStatus.value = "sukses"
      } else {
        inpStatus.value = "ditolak"
      }
    }






    // alasan wajib diisi
    document.getElementById('buttonSubmit').addEventListener('click', function(event) {
        const alasanTextarea = document.getElementById('alasan');
        if (!alasanTextarea.value.trim()) {
            event.preventDefault(); // Mencegah pengiriman formulir jika text area alasan kosong
            alert('Harap isi alasan sebelum mengkonfirmasi pesanan.'); // Tampilkan pesan kesalahan
        }
    });

  </script>

  </html>
@endsection
