<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <style>
    .icons-container {
        display: flex;
        align-items: center; /* Untuk mengatur vertikal tengah */
      }

     .icons {

        width: 30px;
        height: 30px;
        margin-right: 10px; /* Jarak antara gambar dan teks */
      }

      .icons1{
        width: 50px;
        height: 30px;
        margin-right: 10px;
        padding-left: 20px;
      }
      .text {
        padding-left: 50px;
      }

      .card {
        display: flex;
        flex-direction: row;
        align-items: center;
        border-radius: 20px;
        padding: 40px; /* Tambahkan padding jika perlu */
        padding-left:10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6); /* Efek bayangan untuk tampilan card */
        height: 400px;
        width: 1200px
      }

      .card img {
        border-radius: 80%;
    width:  150px;
    height: 150px;
    border-color: solid 4px #ffffff;
    object-fit: cover;
      }
      .card-body{
        padding-left:75px;
      }
      .form-container {
            padding: 20px;
        }
   </style>
</head>
<body>
<br>

<div class="text">
<h1>Informasi Pribadi</h1>
<br><br>
<div class="icons-container">
    <img class="icons " src="{{ asset('img/Vector.png') }}" alt="vector">
    <h3>Profile</h3>
    <img class="icons1" src="{{ asset('img/icon.png') }}" alt="icon">
    <h3>Ubah Password</h3>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <img class="image" src="{{asset('img/JIMIN.jpeg')}}" alt="Film">
                    <br><br>
                    <h3>JIMIN Chr.</h3>
                </div>
                <div class="col-md-9 form-container">
                    <form>
                        <div class="col-md-5">
                            <label for="formFile" class="form-label"><h5>Foto</h5></label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <br>
                        <div class="row mb-8">
                            <div class="col-md-6">
                                <label for="nama"><h5>Nama Siswa</h5></label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Siswa">
                            </div>
                            <div class="col-md-6">
                                <label for="email"><h5>Email</h5></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="user@gmail.com">
                            </div>

                        </div>
                        <div class="row mb-5">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger mx-2">Kembali</button>
                            <button type="submit" class="btn btn-dark mx-2">Simpan</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>
</div>
</body>
</html>
