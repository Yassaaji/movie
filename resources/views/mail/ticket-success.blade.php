
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Tiket MovieFLix</title>
  <style>
    /* Gaya umum */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      color: #333333;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f7f7f7;
    }

    /* Gaya header */
    .header {
      text-align: center;
      padding-bottom: 20px;
    }

    .header img {
      width: 100px;
      height: 100px;
    }

    .header h1 {
      margin: 10px 0;
      color: #333333;
    }

    /* Gaya konten */
    .content {
      padding: 20px;
      background-color: #ffffff;
      border: 2px solid #dddddd;
      border-radius: 5px;
    }

    .content h2 {
      margin-top: 0;
      color: #333333;
    }

    .content p {
      margin-bottom: 20px;
    }

    /* Gaya tiket */
    .ticket {
      padding: 20px;
      background-color: #f7f7f7;
      border: 2px solid #dddddd;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .ticket h3 {
      margin-top: 0;
      color: #333333;
    }

    .ticket p {
      margin-bottom: 10px;
    }

    /* Gaya footer */
    .footer {
      text-align: center;
      padding-top: 20px;
      color: #777777;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1 style="font-size: 40px; font-weight: 900;">MovieFLix</h1>
    </div>
    <div class="content">
      <h2>Selamat Datang di Layanan Kami</h2>
      <p>Kami ucapkan terima kasih karena telah memilih layanan kami. Kami berkomitmen untuk memberikan pengalaman terbaik kepada Anda.</p>
      <p>Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut.</p>
      <p>Terima kasih atas kepercayaan Anda.</p>
    </div>

    @foreach($status_kursi as $kursi)

    <div class="ticket">
      <h3>Tiket Film</h3>
      <p>Judul Film: {{$pesanan->film->judul}}</p>
      <p>Tanggal: {{$pesanan->film->jadwal_tayang}}</p>
      <p>Jam: {{$pesanan->film->jam_tayang}}</p>
      <p>Nomor Kursi: {{$kursi->nomor_kursi}}</p>
    </div>

    @endforeach

    <div class="footer">
      <p>Email ini dikirim oleh MovieFlix | Karang Ploso, Malang, Indonesia</p>
    </div>
  </div>
</body>
</html>
