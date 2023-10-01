<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        $dark: #0a001a;
        $color-yellow: #f2c855;
        $color-purple: #111111;
        $white-and-gray-light-gray: #e2e0e5;

        footer {
            display: flex;
            flex-direction: column;
            background-color: $color-purple;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .footer {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 3vw;
            padding: 72px 8vw;
            color: $white-and-gray-light-gray;
        }

        .footer-right {
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Posisikan konten ke kiri */
    flex: 1; /* Agar dua bagian footer memiliki lebar yang sama */
    align-items: flex-start; /* Posisikan konten ke kiri */

}
.footer-right p {
    color: white; /* Mengubah warna teks menjadi putih */
}

        /* Gaya tambahan untuk bagian kiri footer jika diperlukan */
        .footer-left {
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Posisikan konten ke kiri */
    flex: 1; /* Agar dua bagian footer memiliki lebar yang sama */
    align-items: flex-start; /* Posisikan konten ke kiri */
}

.brand {
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Posisikan teks ke kiri */
    margin-top: 20px; /* Berikan margin atas sesuai kebutuhan */
}


.brand p {
    margin: 0; /* Hapus margin bawaan untuk paragraf */
}

.social {
    display: flex;
    align-items: center; /* Posisikan ikon ke tengah vertikal */
    margin-top: 20px; /* Berikan margin atas sesuai kebutuhan */
}

.social a {
    margin-right: 10px; /* Memberi spasi horizontal antara ikon */
    color: white; /* Mengubah warna ikon menjadi putih */
    font-size: 40px; /* Mengatur ukuran ikon menjadi lebih besar */
}
/* Gaya untuk teks warna ungu */
.white-text {
    color: rgb(255, 255, 255); /* Mengatur warna teks menjadi ungu */
}

    </style>
</head>
<body>
    <footer>
        <section class="footer" style="background-color: #000">
            <div class="footer-left">
                <img src="{{ asset('img/LOGO.png') }}" height="50px">
                <!-- Konten bagian kiri footer -->
                <div class="brand">
                    <p class="white-text"> MovieFlix Bioskop</p>
                    <p  class="white-text">Jl. Kanigaran No.50, Sakulayu, </p>
                    <p  class="white-text">Kec. Kedupok, Kota Probolinggo</p>
                </div>
            </div>
            <div class="footer-right">
                <!-- Konten bagian kanan footer -->
                <div class="social">
                    <a href="https://twitter.com/akun-twitter-anda"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/akun-instagram-anda"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/nama-channel-anda"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

        </section>
    </footer>
</body>
</html>
