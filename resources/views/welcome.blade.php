

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dasboard</title>


    {{-- animate --}}

     <!-- Bosstrap -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

     {{-- Icon --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    {{-- Aos --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}">


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>


<div class="header" style="background-color: #111111 ; color: white; text-align: center; padding: 10px;">
    <h1>Movie</h1>
</div>

<div class="back py-4">
    <div class="container py-3 px-3" >
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="card">
                        <img src="{{ asset('img/home/spiderman.png') }}" alt="" class="card-img-top besar" >
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-in" data-aos-delay="10">
                            <img src="{{ asset('img/home/Antman.jpg') }}" alt="" class="card-img-top kecil">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-in" data-aos-delay="10">
                            <img src="{{ asset('img/home/fastx.jpg') }}" alt="" class="card-img-top kecil">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card"data-aos="fade-in" data-aos-delay="10">
                                <img  src="{{ asset('img/home/Extraction2.jpeg') }}" alt="" class="card-img-top kecil">
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px;">
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-in" data-aos-delay="10">
                            <img src="{{ asset('img/home/Theflash.jpg') }}" alt="" class="card-img-top kecil">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-in" data-aos-delay="10">
                            <img src="{{ asset('img/home/Dogter.jpeg') }}" alt="" class="card-img-top kecil">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-in" data-aos-delay="10">
                            <img src="{{ asset('img/home/batman.jpeg') }}" alt="" class="card-img-top kecil">
                        </div>
                    </div>
                </div>
                <div class="buttons d-flex flex-row-reverse mt-3">
                    <a class="selanjutnya" href="{{ url('/nowplaying'); }}">
                        <button class="transparent-button">
                          Selanjutnya <i class="fas fa-chevron-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="back py-4">
    <div class="container fy-3">
            <div class="judul" >
                <h1>Segera Hadir</h1>
                <p>Ayo jangan lewatkan keseruan film-film yang akan di tayangkan!</p>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <div class="card-welcome" data-aos="fade-up" data-aos-delay="200" >
                            <img src="{{ asset('img/home/onepiece.jpg') }}" alt="" class="card-img-top bawah">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-welcome" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{ asset('img/home/marvel.jpg') }}" alt="" class="card-img-top bawah" >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-welcome" data-aos="fade-up" data-aos-delay="600">
                        <img src="{{ asset('img/home/transformer.jpg') }}" alt="" class="card-img-top bawah" >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-welcome" data-aos="fade-up" data-aos-delay="800">
                        <img src="{{ asset('img/home/ngeringerisedep.jpg') }}" alt="" class="card-img-top bawah" >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-welcome" data-aos="fade-up" data-aos-delay="1000">
                        <img src="{{ asset('img/home/joyride.jpg') }}" alt="" class="card-img-top bawah">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-welcome" data-aos="fade-up" data-aos-delay="1200">
                        <img src="{{ asset('img/home/ninjaturtle.jpg') }}" alt="" class="card-img-top bawah">
                    </div>
                </div>
            </div>
        </div>
            <div class="buttons d-flex flex-row-reverse mt-3">
                <a class="selanjutnya" href="{{ url('/comingsoon'); }}">
                    <button class="transparent-button">
                      Selanjutnya <i class="fas fa-chevron-right"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- Video Trailer --}}
<div class="contentt">
    <h2 class="mvi">Video Trailer</h2>
    <div class="video-slider">
        <div class="video-trailers">
            <!-- Video trailer 1 -->
            <div class="video-trailer"><iframe width="400" height="200" src="https://www.youtube.com/embed/shW9i6k8cB0" frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- Video trailer 2 -->
            <div class="video-trailer"><iframe width="560" height="315" src="https://www.youtube.com/embed/shW9i6k8cB0" frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- Video trailer 3 -->
            <div class="video-trailer"><iframe width="560" height="315" src="https://www.youtube.com/embed/shW9i6k8cB0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
<br>
        <div class="slider">
            <div class="slider-circle active"></div>
            <div class="slider-circle"></div>
            <div class="slider-circle"></div>
        </div>
    </div>
</div>
<h2 class="jdl">Mengapa MovieFlix</h2>
<div class="content bp">
<div class="container tl">
    <div class="column">
        <img src="{{ Storage::url('public/fotoamanterpercaya-home/aman.jpg') }}" alt="aman" height="50px" width="50px">
        <p><strong>Aman</strong></p>
        <br>
        <p>Ayo kunjungin dan beli tiket kami karena yang lain belum tentu berkualitas.</p>
    </div>
    <div class="column">
        <img src="{{ Storage::url('public/fotoamanterpercaya-home/terpercaya.jpg') }}" alt="terpercaya" height="50px" width="50px">
        <p><strong>Terpercaya</strong></p>
        <br>
        <p>Ayo kunjungin dan beli tiket kami karena yang lain belum tentu berkualitas.</p>
    </div>
    <div class="column">
        <img src="{{ Storage::url('public/fotoamanterpercaya-home/metodepembayaran.jpg') }}" alt="metodepembayaran" height="50px" width="50px">
        <p><strong>Metode Pembayaran</strong></p>
        <br>
        <p>Ayo kunjungin dan beli tiket kami karena yang lain belum tentu berkualitas.</p>
    </div>
   </div>
</div>

<script src="bower_components/aos/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
<script src="bower_components/aos/dist/aos.js"></script>
</html>
