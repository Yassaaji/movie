@extends('layouts.admin')
@section('content')


    <style>
        body {
            background-color: #06000f;
            color: white;
        }

        .container {
            display: flex;
            justify-content: flex-end; /* Mengatur posisi ke kanan */
        }

        .card {
            background-color: #000000;
            color: white;
        }

        .btn-purple {
            background-color: rgb(87, 45, 155);
            color: white;
        }

        .table {
            color: white;
            text-align: center;
            vertical-align: middle;
            font-size: 14px;
            border: none;
        }

        /* Style table header */
        .table thead tr th {
            background-color: #010e1b;
            border: none;
            padding: 5px;
        }

        /* Style table rows alternately */
        .table tbody tr:nth-child(odd) {
            background-color: #767676; /* Darker background for odd rows */
            height: 30px;
        }

        /* Style buttons in table */
        .table .btn {
            color: white;
            border: none;
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
            max-width: 90%;
            max-height: 90%;
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

        /* Style header text */
        .header-text {
            text-align: center;
            padding: 20px;
        }
    </style>

    <div class="container mt-4">
        <div class="header-text">

        </div>
    </div>

    <div class="container mt-4 mr-4">
        <div class="card">
            <div class="card-body" style="background-color: #000000">
                <div class="btn-group mt-3" role="group" aria-label="Ruangan Teater">
                    <button type="button" class="btn btn-purple mr-3" style="background-color: #0f0f0f; color:#fff";><h3>KONFIRMASI TIKET</h3></button>
                </div>
                <div class="table-responsive mt-4">
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
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $orders as $i => $pesanan )
                            <tr>
                                <td scope="row">{{ $i+1 }}</td>
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
                                    {{-- <button  class="btn" data-bs-toggle="modal" data-bs-target="#konfirmasiModal.{{$pesanan->id}}">Tolak</button> --}}
                                    <form action="{{ route('update_konfirmasi','')}}/{{ $pesanan->id }}" method="post">
                                        @csrf
                                        <input id="status" type="hidden" name="status" value="" >


                                        <div class="modal fade" id="konfirmasiModal.{{$pesanan->id}}" tabindex="-1" aria-labelledby="konfirmasiModalLabel.{{$pesanan->id}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="konfirmasiModalLabel.{{$pesanan->id}}">Konfirmasi</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  <label for="alasan" class="form-control">
                                                      <span>Berikan Alasanya: </span>
                                                      <textarea name="alasan" id="alasan" cols="10" rows="10">

                                                      </textarea>
                                                  </label>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                                                  <button type="submit" class="btn btn-primary" name="status" value="ditolak">Submit</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                        <button onclick="handleStatus('sukses')" type="submit" class="btn btn-success">Konfirmasi</button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasiModal.{{ $pesanan->id }}">Tolak</button>

                                    </form>

                                </td>
                            </tr>
                            @empty
                            <!-- Handle empty table -->
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

@endsection
