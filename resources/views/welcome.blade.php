
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
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


           <!-- Tambahkan pustaka jQuery dan JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tambahkan pustaka AOS jika diperlukan -->


    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/caraousel-nowplaying/kontenn.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                <h1>Selamat Datang</h1>
                    <p>Selamat Menikmati tontonan flim terseru di MovieFlix</p>
                    <div class="btn-group">
                        <a href="{{ route('login') }}" class="btn">Login</a>
                        <a href="{{ route('register') }}" class="btn">Register</a>
                    </div>
                    <div class="buttons mt-3">
                        <div class="d-flex justify-content-center">
                            <a class="selanjutnya" href="{{ route('login') }}">
                                <button class="transparent-button">
                                    Get Started
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="back py-4">
    <div class="container py-3">
        <div class="judul" >
            <h1>TRENDING NOW</h1>
            <p>Film yang sering di nikmati saat ini!</p>
        </div>

    </div>
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
                    <a class="selanjutnya" href="{{ url('/nowplaying')}}">
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
                    @forelse ( $commingsoons as $cs )
                    <div class="col-md-2">
                        <a href="">
                            <div class="card-welcome" data-aos="fade-up" data-aos-delay="200" >
                            <img src="{{ asset('storage/thumbnile/'.$cs->thumbnile) }}" alt="" class="card-img-top bawah">
                        </a>
                        </div>
                    </div>
                    @empty

                    @endforelse

                </div>
            </div>
        </div>
            <div class="buttons d-flex flex-row-reverse mt-3">
                <a class="selanjutnya" href="{{ url('/comingsoon')}}">
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
        <section class="testimonials">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel" id="customers-testimonials" >
                      @foreach ( $trailer as $video)
                    <!--TESTIMONIAL 1 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <div class="video-trailer" data-aos="fade-up" data-aos-delay="150">
                                <iframe width="400" height="300" src="{{ $video }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
            <br><br><br><br>
                </div>
              </div>
            </div>
        </section>
    </div>
</div>
<br>
<h2 class="jdl">Mengapa MovieFlix</h2>
<div class="content bp" data-aos="fade-up" data-aos-delay="100">
<div class="container tl">
    <div class="column">
        <img src="{{ asset('img/ticket.jpg') }}" alt="aman" height="50px" width="50px">
        <p><strong>Aman</strong></p>
        <br>
        <p>Ayo kunjungin dan beli tiket kami karena yang lain belum tentu berkualitas.</p>
    </div>
    <div class="column">
        <img src="{{ asset('img/aman.jpg') }}" alt="terpercaya" height="50px" width="50px">
        <p><strong>Terpercaya</strong></p>
        <br>
        <p>Ayo kunjungin dan beli tiket kami karena yang lain belum tentu berkualitas.</p>
    </div>
    <div class="column">
        <img src="{{ asset('img/pembayaran.jpg') }}" alt="metodepembayaran" height="50px" width="50px">
        <p><strong>Metode Pembayaran</strong></p>
        <br>
        <p>Ayo kunjungin dan beli tiket kami karena yang lain belum tentu berkualitas.</p>
    </div>
  </div>
</div>
<body><div class="container">
    <h2 class="jdl">Tanya Jawab Umum</h2>
    <br>
    <center>
        <!-- Pertanyaan 1 -->
        <div class="dropdown">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 1100px;">
                Apa itu MovieFlix?
            </button>
            <ul class="dropdown-menu bg-secondary" style="min-width: 1100px;">
                <li>
                    <center>
                        <p>MovieFlix adalah platform tempat pengguna dapat membeli film dan tiket hiburan lainnya melalui website.</p>
                    </center>
                </li>
            </ul>
        </div>
        <br><br>
        <!-- Pertanyaan 2 -->
        <div class="dropdown">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 1100px;">
                Kelebihan Apa saja di MovieFlix?
            </button>
            <ul class="dropdown-menu bg-secondary" style="min-width: 1100px;">
                <li>
                    <center>
                        <p>Tidak Perlu antri tiket, Sistem pembayaran praktis, dan banyak kelebihan lainnya.</p>
                    </center>
                </li>
            </ul>
        </div>
        <br><br>
        <!-- Pertanyaan 3 -->
        <div class="dropdown">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 1100px;">
                Bagaimana cara pesan tiket online?
            </button>
            <ul class="dropdown-menu bg-secondary" style="min-width: 1100px;">
                <li>
                    <center>
                        <p>1. Pelanggan perlu Register lalu Login</p>
                        <p>2. Pilih Film yang ingin anda nonton</p>
                        <p>3. Pilih tiket dan harga sesuai kebutuhan anda di halaman sinopsis Film.</p>
                        <p>4. Lalu lakukan pembayaran dengan metode yang tersedia.</p>
                    </center>
                </li>
            </ul>
        </div>
        <br><br><br><br><br>
        <br><br>
    </center>
</div>



<script src="bower_components/aos/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script  src="./script.js"></script>
{{-- <script>
  jQuery(document).ready(function($) {
"use strict";
$('#customers-testimonials').owlCarousel( {
		loop: true,
		center: true,
		items: 3,
		margin: 30,
		autoplay: true,
		dots:true,
    nav:true,
		autoplayTimeout: 5000,
    autoplayHoverPause:true,
    stopOnHover:true,
		smartSpeed: 850,
  	navText: ['<i class="fa fa-arrow-alt-circle-left" style="font-size:30px;color:blue"></i>','<i class="fa fa-arrow-alt-circle-right" style="font-size:30px;color:blue"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1170: {
				items: 3
			}
		}
	});
});
</script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        "use strict";
        $('#customers-testimonials').owlCarousel({
            loop: true,
            center: true,
            items: 3,
            margin: 30,
            autoplay: true,
            dots: true,
            nav: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            stopOnHover: true,
            smartSpeed: 850,
            navText: ['<i class="fa fa-arrow-alt-circle-left" style="font-size:30px;color:blue"></i>','<i class="fa fa-arrow-alt-circle-right" style="font-size:30px;color:blue"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1170: {
                    items: 3
                }
            }
        });
    });
</script>


</body>
<script src="bower_components/aos/dist/aos.js"></script>
</html>

@include('layouts.footer')
