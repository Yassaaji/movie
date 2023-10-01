@extends('layouts.app')
@section('content-app')

{{-- @dump($data[0]) --}}

    <section class="m-profile setting-wrapper" style="background-color:rgb(30, 28, 28);">
    <br><br><br><br><br><br><br>
        <style>
            .edit{
                opacity: 0;
                transition: 0.2s;
            }

            .edit:hover{
                opacity: 100;
            }
            .sign-user_card.dl {
    max-width: 700px; /* Sesuaikan dengan lebar yang Anda inginkan */
    justify-content: center;
}

        </style>

        <div class="container">
            <h4 class="main-title mb-8 user " style="color: #fff"></h4>
            <div class="row">
                    <a href="{{route('profile.edit', Auth::user()->id )}}">
                <div class="col-lg-4 mb-3 d-flex justify-content-center align-items-center">
                        <div class="img-container">
                            <img
                            style="
                                width: 200px;
                                height: 200px;
                                border-radius: 100%;
                            "
                            class="object-fit-cover"
                            @if (Auth::user()->fotoprofil === "default.jpg")
                            src="{{ asset('storage/' . Auth::user()->fotoprofil ) }}"
                            @else
                            src="{{ asset('storage/profile/' . $data[0]->fotoprofil) }}"
                            @endif
                               loading="lazy">
                               <p style="
                               position: absolute;
                               z-index:10;
                               font-size: 100px;
                               "
                               class="edit"
                               >
                               <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="#888888" d="m18.988 2.012l3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287l-3-3L8 13z"/><path fill="#888888" d="M19 19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"/></svg>
                               </p>
                         </div>
                    </a>
                </div>

                <div class="col-lg-8 ml-12 ">
                    <div class="sign-user_card dl">
                        <h5 class="mb-3 pb-3 a-border besar">DETAIL PROFIL PENGGUNA</h5>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <span class="text font-size-13 kecil">Nama</span>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0 kecil with-border">{{ $data[0]->name }}</p>
                             </div>
                       </div>
                       <div class="row mb-3">
                             <div class="col-md-4" >
                                <span class="text font-size-13 kecil ">Email</span>
                             </div>
                             <div class="col-md-7">
                                <p class="mb-0 kecil with-border">{{ $data[0]->email }}</p>
                             </div>
                       </div>
                       <div class="row mb-3">
                             <div class="col-md-4">
                                <span class="text font-size-13 kecil ">telp</span>
                             </div>
                             <div class="col-md-7">
                                <p class="mb-0 kecil with-border">{{ $data[0]->noTelp }}</p>
                             </div>
                       </div>
                 </div>
           </div>
        </div>
        <br><br><br><br><br><br>

        <!-- Custom JS-->
        <script src="{{ asset('js/custom.js') }}"></script>
    </section>

@endsection
