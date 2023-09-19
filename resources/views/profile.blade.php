@extends('layouts.navbar')

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset ('images/favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}" />
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}" />


</head>
@section('content')
<body style="background-color: #ffffff">
    <section class="m-profile setting-wrapper">
        <div class="container">
           <h4 class="main-title mb-4 user">User Profile</h4>
           <div class="row">
                 <div class="col-lg-4 mb-3">
                    <div class="sign-user_card text-center">
                        <div class="img-container">
                            <a href="#" class="edit-icon text-primary">
                                <i class="fi fi-bs-edit"></i>
                            </a>
                            <img class="img" src="{{ asset('img/home/profil.jpg') }}" class="rounded-circle img-fluid d-block mx-auto mb-3" alt="user" loading="lazy">
                        </div>
                        <div class="about">
                       <h4 class="mb-3">Brok Lee</h4>
                    </div>
                    </div>
                 </div>
                <div class="col-lg-8 ml-5">
                    <div class="sign-user_card">
                       <h5 class="mb-3 pb-3 a-border besar">DETAIL PROFILE</h5>
                       <div class="row align-items-center justify-content-between mb-3">
                             <div class="col-md-8">
                                <span class="text font-size-13 kecil ">Nama</span>
                                <p class="mb-0 kecil with-border">Nama Lengkap</p>
                             </div>
                       </div>
                       <div class="row align-items-center justify-content-between mb-3">
                             <div class="col-md-8" >
                                <span class="text font-size-13 kecil ">Email</span>
                                    <p class="mb-0 kecil with-border">Example@gmail.com</p>
                             </div>
                       </div>
                       <div class="row align-items-center justify-content-between mb-3">
                             <div class="col-md-8">
                                <span class="text font-size-13 kecil ">Password</span>
                                <p class="mb-0 kecil with-border">********</p>
                             </div>
                       </div>
                       <div class="row align-items-center justify-content-between">
                             <div class="col-md-8">
                                <span class="text font-size-13 kecil ">ConfirmPassword</span>
                                <p class="mb-0 kecil with-border">********</p>
                             </div>
                       </div>

                 </div>
           </div>
        </div>
         <!-- Custom JS-->
         <script src="{{ asset ('js/custom.js') }}"></script>


     </section>
</body>
@endsection
