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
        padding-left: 150px;

      }

      .btt {
  background-image: linear-gradient(
    to right,
    #0f0d46,
    #3f90ad 50%,
    #000 50%
  );
  background-size: 200% 100%;
  background-position: -100%;
  display: inline-block;
  padding: 5px 0;
  position: relative;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: all 0.3s ease-in-out;
}

.btt:before {
  content: '';
  background: #0f0d46;
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 1px;
  transition: all 0.3s ease-in-out;
}

.btt:hover {
 background-position: 0;
}

a:hover::before {
    width:100%;
}

     .icons {

        width: 30px;
        height: 30px;
        margin-right: 10px; /* Jarak antara gambar dan teks */
        margin-bottom: 10px;

      }

      .icons1{
        width: 50px;
        height: 30px;
        margin-right: 10px;
        padding-left: 20px;
        margin-bottom: 10px;
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
        .signature {
            width: 200px;
        padding: 10px 20px; /* Menambahkan ruang padding untuk memberikan efek 3D */
        background-color: #333; /* Warna latar belakang tombol */
        color: #fff; /* Warna teks pada tombol */
        border: none; /* Menghilangkan border */
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    // this code is such a mess right now ! If you look at it, your eyes will bleed.



.signature {
	width: 100vw;
	height: 100vh;
	background: #151515;
	display: flex;
	flex-flow: row wrap;
	justify-content: center;
	align-items: center;
	overflow:hidden;
}

button {
	font-family: 'Space Mono', monospace;
	letter-spacing: 1px;
	background: none;
	color: white;
	position: relative;
	outline: none;
	border: none;
	height: 50px;
	width: 190px;
	font-size: 14px;
	z-index: 2;
	transition: .01s .23s ease-out all;
	overflow: hidden;
	&:before {
		content: '';
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		width: 55%;
		background: #202020;
		z-index: -1;
		transition: .3s ease-in all;
	}
	&:after {
		content: '';
		position: absolute;
		left: -5%;
		top: 5%;
		height: 90%;
		width: 5%;
		background: white;
		z-index: -1;
		transition: .4s .02s ease-in all;
	}
	&:hover {
		cursor: pointer;
		color: transparent;
		&:before {
			left: 100%;
			width: 25%;
		}
		&:after {
			left: 100%;
			width: 70%;
		}
		.icon-right.after:after {
			left: -80px;
			color: white;
			transition: .2s .2s ease all;
		}
		.icon-right.after:before {
			left: -104px;
    	top: 14px;
			opacity: 0.2;
			color: white;
		}
	}
}

.icon-right {
	position: absolute;
	top: 0;
	right: 0;
	&:after {
		font-family: "FontAwesome";
		content: '\2192';
		font-size: 24px;
		display: inline-block;
		position: relative;
		top: 26px;
		transform: translate3D(0, -50%, 0);
	}
	&.after:after {
		left: -250px;
		color: black;
		transition: .15s .25s ease left, .5s .05s ease color;
	}
	&.after:before {
		content: 'Explore';
		position: absolute;
		left: -230px;
		top: 14px;
		opacity: 0;
		transition: .2s ease-in all;
	}
}


.signature {
	position: absolute;
    font-family:  sans-serif;
	font-weight: 100;
	bottom: 10px;
	left: 0;
	letter-spacing: 4px;
	font-size: 10px;
	width: 15%;
  text-align: center;
  color: white;
	text-transform: uppercase;
  text-decoration: none;
}

   </style>
</head>
<body>
<br>
<div class="text">
<h1>Informasi Pribadi</h1>
<br><br>
<div class="icons-container mt-7">
<a class="nav-link d-flex btt" href="{{ url('/profile') }}">
    <img class="icons"  src="{{ asset('img/Vector.png') }}" alt="vector">
    <h5>Profile</h5>
</a>
<a class="nav-link d-flex btt" href="{{ url('/ubahpassword') }}">
    <img class="icons1" src="{{ asset('img/icon.png') }}" alt="icon">
    <h5>Ubah Password</h5>
</a>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top: -50px">
                <div class="card-body">
                    <img class="image" src="{{asset('img/JIMIN.jpeg')}}" alt="Film">
                    <br><br>
                    <h3>JIMIN Chr.</h3>
                </div>
                <div class="col-md-7 form-container">
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
                        <div >


                            <div class="d-flex justify-content-center" style="width:100%">
                                <button type="submit" style="margin-left: 62%; margin-bottom: 3%" name="simpan" value="Edit" class="btn btn-dark mx-111 signature">Edite</button>
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

\
