@extends('layouts.app')
@section('content-app')




    <section class="m-profile setting-wrapper" style="background-color:black;">
        <div class="container">
            <h4 class="main-title mb-4 user">User Profile</h4>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="card-title">
                        <div class="" style="float: right">
                            <a href="{{ url('/editprofil') }}">
                                <img class="icons" src="{{ asset('img/PencilSquare.png') }}" alt="vector" width="25" height="25">

                            </a>
                        </div>
                    </div>
                    <div class="sign-user_card text-center">
                        <div class="img-container">

                            <img class="img" src="{{ asset('img/home/profil.jpg') }}"
                                class="rounded-circle img-fluid d-block mx-auto mb-3" alt="user" loading="lazy">
                        </div>
                        <div class="about">
                            <h4 class="mb-3">Brok Lee </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 ml-5 ">
                    <div class="sign-user_card dl">
                        <h5 class="mb-3 pb-3 a-border besar">DETAIL PROFILE</h5>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <span class="text font-size-13 kecil">Nama</span>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0 kecil with-border">Nama Lengkap</p>
                             </div>
                       </div>
                       <div class="row mb-3">
                             <div class="col-md-4" >
                                <span class="text font-size-13 kecil ">Email</span>
                             </div>
                             <div class="col-md-7">
                                <p class="mb-0 kecil with-border">Example@gmail.com</p>
                             </div>
                       </div>
                       <div class="row mb-3">
                             <div class="col-md-4">
                                <span class="text font-size-13 kecil ">Password</span>
                             </div>
                             <div class="col-md-7">
                                <p class="mb-0 kecil with-border">********</p>
                             </div>
                       </div>
                 </div>
           </div>
        </div>
        <!-- Custom JS-->
        <script src="{{ asset('js/custom.js') }}"></script>
    </section>

@endsection
