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
            align-items: center;
            /* Untuk mengatur vertikal tengah */
        }

        .icons {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            /* Jarak antara gambar dan teks */
        }

        .icons1 {
            width: 40px;
            height: 30px;
            margin-right: 20px;
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
            padding: 40px;
            /* Tambahkan padding jika perlu */
            padding-left: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Efek bayangan untuk tampilan card */
            height: auto;
            width: 150%;
            margin-top: -50px;
            /* Mengangkat card ke atas */
        }

        .card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            border-color: solid 2px #ffffff;
            object-fit: cover;
        }

        .card-body {
            padding-left: 10px;
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
        <a class="icons-container text-decoration-none  " href="{{ route('profile.index') }}">
            <img class="icons" src="{{ asset('img/Vector.png') }}" alt="vector">
            <h3 class="text-dark">Profile</h3>
        </a>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('editpassword') }}" method="post">
                                @csrf
                                @method('PATCH')

                        </div>
                        <div class="col-md-10 form-container">
                            <br><br>
                            <div class="row mb-5">
                                <div class="col-md-4">
                                    <label for="old_password">Password Lama</label>
                                    <input type="text"
                                        class="form-control  @error('old_password') is-invalid @enderror"
                                        id="old_password" placeholder="password lama" name="old_password">
                                    @error('old_password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="password">Password Baru</label>
                                    <input type="password"
                                        class="form-control   @error('password') is-invalid @enderror" id="password"
                                        name="password"
                                        placeholder="Password">
                                    @error('password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation"
                                        placeholder="Password">
                                    <br>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-dark">Simpan</button>
                                </div>
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
