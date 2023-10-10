@extends('layouts.app')

{{-- @dd($film) --}}
@section('content-app')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;x
        }

        h1 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    margin: 50;
}



        .content {
            display: flex;
            grid-template-columns: auto 1fr;
            /* Kolom pertama untuk h2, kolom kedua untuk container */
            align-items: center;
            /* Mengatur vertikal ke tengah */
            gap: 1px;
            /* Jarak antara h2 dan container */
        }

        .contentt {
            display: flex;
            flex-direction: column;
            /* Elemen-elemen di dalamnya akan tampil dalam satu kolom */
        }

        .video-trailers {
            display: flex;
            flex-direction: row;
            /* Video trailer akan sejajar ke samping */
            justify-content: space-between;
            /* Mengatur jarak antara video trailer */
            margin-top: 10px;
            /* Menambahkan margin atas untuk memberikan sedikit jarak */

        }

        .video-trailer {
            flex: 1;
            /* Membagi ruang secara merata antara video trailer */

        }

        .video-trailer iframe {
            width: 100%;
            height: 120%;
        }


        .column {
            flex-basis: 35%;
        }

        /* styles.css */
        .video-slider {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .video-trailers {
            display: flex;
            overflow: hidden;
            width: 100%;
            transition: transform 0.3s ease-in-out;
        }

        .video-trailer {
            min-width: 300px;
            max-width: 300px;
            margin: 0 10px;
        }

        .slider {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .slider-circle {
            width: 15px;
            height: 15px;
            background-color: #bcc8d5;
            border-radius: 50%;
            cursor: pointer;
            margin: 0 5px;
            /* Jarak antara setiap kontrol penggeser */
            transition: background-color 0.3s ease;
        }

        .slider-circle.active {
            background-color: #717b86;
            /* Warna lingkaran aktif */
        }

        .prev-video,
        .next-video {
            padding: 5px 10px;
            background-color: #a4b0bc;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            /* Jarak antara tombol dan lingkaran penggeser */
        }

        .prev-video:hover,
        .next-video:hover {
            background-color: #b5c0cd;
        }

        /* END HOME */

        .image {
            text-align: right;
            color: rgb(0, 0, 0);

        }

        .image img {
            width: 250px;
            height: auto;
            border-radius: 25px;
        }

        .data {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 5px; /* Anda mungkin ingin mengatur ulang margin kiri */
    margin-top: 0;
}


        .data h2 {
            font-size: 24px;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .data p {
    font-size: 16px;
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
    text-align: left;
    margin: 0;
}


        .film-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .sinopsis {
            flex: 1;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            padding: 0;
        }

        .text {
            font-size: 24px;
            font-family: 'Poppins', sans-serif;
            align-self: flex-start;
        }
.sinopsis h1 {
    font-size: 20px;
    font-weight: normal;
}




        .left-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        .left-column {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        h2 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    /* margin-top: 20px; Add margin at the top */
    /* padding-top: 1px; */
    padding-left: 5 0px;
}

        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            padding: 0;
        }

        .jumbotron{
            padding: 0px;
            display: flex;
            align-items: flex-start;
            margin-top: 100px;
            justify-content: space-between;
        }


        .comment img{
            width: 40px;
            height: 40px;
            object-fit: cover;
            object-position: center;
            border-radius: 100%;
        }

        .komentar-wrapper{
            padding: 50px;
            display: flex;
        }
        .btn-dark {
                    background-color: #414144;
                    /* Warna latar belakang tombol */
                    color: #ffffff;
                    /* Warna teks tombol */
                    transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
                    /* Efek transisi untuk bayangan, transformasi, dan warna teks */
                    box-shadow: 2px 2px 5px rgba(134, 134, 134, 0.3);
                    /* Bayangan awal */
                }

                .btn-dark:hover {
                    background-color: #6f6c6c;
                    /* Warna latar belakang saat dihover */
                    color: #ffffff;
                    /* Warna teks saat dihover */
                    transform: scale(1.1);
                    /* Perubahan ukuran saat dihover */
                    box-shadow: 4px 4px 10px rgba(134, 134, 134, 0.3);
                    /* Bayangan saat dihover */
                }
                .container {
            max-width: 100%;
            overflow: hidden;
        }

        /* Atur overflow untuk komentar */
        .komentar-wrapper {
            max-height: 400px;
            overflow-x: auto;
        }

    </style>
<div class="p-5 pb-5">
    <br><br><br>

    <h1><strong>{{ $film->judul }}</strong></h1>
    <button  class="btn btn-dark" style="position: absolute; top: 120px; right: 100px " >
        <a href="/nowplaying" style="text-decoration: none; color:#ffff;">Kembali</a>
        </button>
    <div class="container jumbotron p-3">
    <div class="content">
        <div class="image">
            <img src="{{ asset('storage/thumbnile/' . $film->thumbnile ) }}" alt="Film">
        </div>
        <div class="data">
            <p style="margin-bottom: 25px;"><strong>Director :</strong> {{ $film->director }}</p>
            <p style="margin-bottom: 25px;"><strong>Casts :</strong> {{ $film->cast }}</p>
            <p style="margin-bottom: 25px;"><strong>Duration :</strong> {{ $film->durasi }} Menit</p>
            <p style="margin-bottom: 25px;"><strong>Min Usia :</strong> {{ $film->minimal_usia }}+</p>
            <p style="margin-bottom: 25px;"><strong>Genre :</strong> {{ $film->genre->genre }}</p>
            <p style="margin-bottom: 25px;"><strong>Jadwal Tayang :</strong> {{ $film->jadwal_tayang }}</p>
            <p style="margin-bottom: 25px;"><strong>Jam Tayang :</strong> {{ date('H:i', strtotime($film->jam_tayang)) }}</p>
            <p style="margin-bottom: 25px;"><strong>Harga ticket :</strong>  Rp.{{ number_format($film->harga) }}</p>
        </div>
    </div>
    <div class="sinopsis">
        <h1><strong>TRAILER DAN SINOPSIS</strong></h1>
        <iframe style="width: 90%; height:350px;" src="{{ $film->trailer }}" frameborder="0" allowfullscreen></iframe>
        <p style="width:90%;font-weight:400">{{ $film->sinopsis }}</p>
        @if ($film->status === 'nowplaying' && !(Auth::user()->role === "admin"))
        <a href="{{ route('order', $film->id) }}" class="btn btn-dark col-md-11 mt-2" style="text-decoration: none; color:#ffff;">Beli Tiket</a>
        @endif
    <br>
    </div>
</div>

<div class="container p-5 mt-5" style="width: 100%; height:30vh;">
    <div class="row h-100">
        <div class="col">
            <h2 style="font-size: 100px;" class="text-center fs-1">{{ number_format($akmRating,1) }}</h2>
            <center>@for ($i = 0 ; $i < 5 ; $i ++)
                @if($i < $bintang)
                <i class="fa fa-star" style="font-size:50px; color: yellow;"></i>
                @else
                <i class="fa fa-star" style="font-size:50px"></i>
                @endif
            @endfor</center>
        </div>
    </div>
</div>


<div class="d-flex flex-column align-items-center">
    <div class="container-fluid">
        <div class="row p-5 w-100">
            <label for="" class="fs-5 fw-semibold text-dark mb-0">Komentar</label>
            <div class="col ">
                @error('komentar')
                   <script>
                    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: '{{ $message }}',
  footer: '<a href="">Why do I have this issue?</a>'
})
                   </script>
                @enderror
                <form action="{{ route('tambahKomentar',$film->id) }}" method="post">
                    @csrf
                    <textarea name="komentar" class="form-control" id="" rows="4" placeholder="Masukkan komentar anda" ></textarea>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="justify-content-center btn  btn-rounded btn-dark d-flex align-items-center" style="">
                        Kirim
                    </button>
                </div>
                </form>
            </div>
            <div class="container">

            </div>
            <label for="" class="fs-5 fw-semibold text-dark mb-0 mt2">List Komentar</label>
            <div class="col">
                @forelse ( $komentar as $data )

                <div id="dark-header-modal{{ $data->id }}" class="modal fade " tabindex="-1" aria-labelledby="dark-header-modalLabel" aria-modal="true" role="dialog" style="display: none;">
                    <form action="{{ route('updateKomentar',$data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header modal-colored-header bg-dark">
                          <h4 class="modal-title text-white" id="dark-header-modalLabel">
                            Edit Komentar
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col ">
                                @error('komentar')
                                    <p>{{ $message }}</p>
                                @enderror

                                    @csrf
                                    <textarea name="komentar" class="form-control" id="" rows="4" placeholder="Masukkan komentar anda" autofocus>{{ $data->content }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Close
                          </button>
                          <button type="submit" class="btn btn-dark">
                            Save changes
                          </button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </form>
                  </div>


                @if ($data->parent_id === null)
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-header gap-2">
                            <div class="">
                                @if ($data->user->fotoprofil === "default.jpg")
                                <img src="{{ asset('storage/' . $data->user->fotoprofil) }}" width="45" height="45" class="rounded-circle object-fit-cover" alt="">
                                @else
                                <img src="{{ asset('storage/profile/' . $data->user->fotoprofil) }}" width="45" height="45" class="rounded-circle object-fit-cover" alt="">
                                @endif
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-header gap-5 mb-0">
                                    <div class="mb-0">
                                        <p class="mb-0">
                                            {{ $data->user->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="">
                                    <p>
                                        {{ $data->content }}
                                    </p>
                                </div>
                                <div id="{{ $data->id }}" class="d-none col w-100">
                                    @forelse ( $komentar as $reply )
                                        @if ($data->id === $reply->parent_id)

                                        <div id="dark-header-modal{{ $reply->id }}" class="modal fade " tabindex="-1" aria-labelledby="dark-header-modalLabel" aria-modal="true" role="dialog" style="display: none;">
                                            <form action="{{ route('updateKomentar',$reply->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header modal-colored-header bg-dark">
                                                  <h4 class="modal-title text-white" id="dark-header-modalLabel">
                                                    Edit Komentar
                                                  </h4>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col ">
                                                        @error('komentar')
                                                            <p>{{ $message }}</p>
                                                        @enderror

                                                            @csrf
                                                            <textarea name="komentar" class="form-control" id="" rows="4" placeholder="Masukkan komentar anda" autofocus>{{ $reply->content }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                                    Close
                                                  </button>
                                                  <button type="submit" class="btn btn-dark">
                                                    Save changes
                                                  </button>
                                                </div>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </form>
                                          </div>

                                        <div class="card-body">
                                            <div class="d-flex justify-content-header gap-2">
                                                <div class="">
                                                    @if (($reply->user->fotoprofil === "default.jpg") )
                                                    <img src="{{ asset('storage/' . $reply->user->fotoprofil) }}" width="45" height="45" class="rounded-circle object-fit-cover" alt="">
                                                    @else
                                                    <img src="{{ asset('storage/profile/' . $reply->user->fotoprofil) }}" width="45" height="45" class="rounded-circle object-fit-cover" alt="">
                                                    @endif
                                                </div>
                                                <div class="">
                                                    <div class="d-flex justify-content-header gap-5 mb-0">
                                                        <div class="mb-0">
                                                            <p class="mb-0">
                                                                {{ $reply->user->name }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <p>
                                                            {{ $reply->content }}
                                                        </p>
                                                    </div>
                                                </div>
                                                @if ($reply->user_id === Auth::user()->id || Auth::user()->role === "admin" )
                                                <div class="">
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$reply->id}}" style="">
                                                        @if($reply->user_id === Auth::user()->id)
                                                        <li>
                                                            <button type="button" class="border-0 bg-transparent w-full" data-bs-toggle="modal" data-bs-target="#dark-header-modal{{ $reply->id }}">
                                                                Edit
                                                            </button>
                                                        </li>
                                                        @endif
                                                        <li>
                                                            <form action="{{ route('hapusKomentar',$reply->id) }}" method="post" >
                                                                @csrf
                                                                @method('DELETE')
                                                            <button onclick="confirmDelete(event)"  class="border-0 bg-transparent w-full btn-delete">
                                                                Hapus
                                                            </button>
                                                            </form>
                                                        </li>
                                                      </ul>

                                                    <button class="border-0" type="button" id="dropdownMenuButton{{ $reply->id }}" data-bs-toggle="dropdown" aria-expanded="false" >
                                                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#000000" stroke="#000000" stroke-width="1.5" d="M12 5.25a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5Zm0 6a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5Zm0 6a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5Z"/></svg>
                                                    </button>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @endif
                                    @empty
                                            <p>Belum ada komentar</p>
                                    @endforelse
                                    <div class="w-100">
                                        @error('komentar')
                                            <p>{{ $message }}</p>
                                        @enderror
                                        <form action="{{ route('tambahKomentar',$film->id) }}" method="post" class="d-flex flex-row gap-2 w-8 align-content-center justify-content-center">
                                            @csrf
                                            <input name="komentar" class="form-control" id="" rows="2" placeholder="Masukkan komentar anda" autofocus/>
                                            <button type="submit" name="komentar_id" value="{{ $data->id }}" class="justify-content-center btn btn-rounded btn-dark d-flex align-items-center">
                                                Kirim
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <button class="btn btn-light-primary rounded-3" onclick="reply('{{$data->id}}')">
                                    Lihat komentar
                                </button>
                            </div>
                            @if ($data->user_id === Auth::user()->id || Auth::user()->role === "admin")
                            <div class="">
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$data->id}}" style="">
                                    @if($data->user_id === Auth::user()->id)
                                    <li>
                                        <button type="button" class="border-0 bg-transparent w-full" data-bs-toggle="modal" data-bs-target="#dark-header-modal{{ $data->id }}">
                                            Edit
                                        </button>
                                    </li>
                                    @endif
                                    <li>
                                        <form action="{{ route('hapusKomentar',$data->id) }}" method="post" >
                                            @csrf
                                            @method('DELETE')
                                        <button onclick="confirmDelete(event)"  class="border-0 bg-transparent w-full btn-delete">
                                            Hapus
                                        </button>
                                        </form>
                                    </li>
                                  </ul>

                                <button class="border-0" type="button" id="dropdownMenuButton{{ $data->id }}" data-bs-toggle="dropdown" aria-expanded="false" >
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#000000" stroke="#000000" stroke-width="1.5" d="M12 5.25a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5Zm0 6a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5Zm0 6a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5Z"/></svg>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @empty
                <p>Belum ada komentar</p>
                @endforelse
        </div>
    </div>
</div>


<script>




    function confirmDelete(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin menghapus komentar ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.closest('form').submit();
            }
        });
    }

                function reply(id){
                    let btn = false;

                    if(!btn){
                        const reply = document.getElementById(id);
                        reply.classList.toggle('d-none');
                        btn = !btn
                    }
                }

    // $(document).ready(()=>{
    //     $('.btn-delete').click(function(e){
    //         e.preventDefault();

    //         var komentar = $(this).data('id');
    //         var button = $(this)

    //         $.ajax({
    //             url: '/hapusKomentar/' + komentar,
    //             type: 'DELETE',
    //             headers:{
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             success: function(res){
    //                 alert('berhasil')

    //                 button.closest('').remove()
    //             }

    //              error: function(xhr) {
    //                 // Tampilkan pesan error atau lakukan penanganan error
    //                 console.log(xhr.responseText);
    //             }

    //         })
    //     })
    // })


                    </script>



@endsection
