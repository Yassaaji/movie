<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Pembatalan Pesanan</title>
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

    /* Gaya pesanan dibatalkan */
    .cancellation {
      padding: 20px;
      background-color: #ffcccc;
      border: 2px solid #dd9999;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .cancellation h3 {
      margin-top: 0;
      color: #cc0000;
    }

    .cancellation p {
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
      <h2>Pesanan Dibatalkan</h2>
      <p>Maaf, pesanan Anda telah dibatalkan oleh admin.</p>
      <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami.</p>
      <p>Terima kasih atas pemahaman Anda.</p>
    </div>

    <div class="cancellation">
      <h3>Informasi Pesanan:</h3>
      <p>Nomor Pesanan: {{ $pesanan->id }}</p>
      <p>Tanggal Pesanan: {{ $pesanan->created_at }}</p>
      <p>Alasan Pembatalan: {{ $pesanan->alasan }}</p>
    </div>

    <div class="footer">
      <p>Email ini dikirim oleh MovieFlix | Karang Ploso, Malang, Indonesia</p>
    </div>
  </div>
</body>
</html>
