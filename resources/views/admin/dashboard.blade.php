@extends('layouts.admin')

@section('content')
    <main class="text-white shadow">
        {{-- HEADER --}}
        <div class="navbar-link-header pt-3 px-5">
            <h3>Karyawan</h3>
            <p>Dashboard</p>
        </div>

        {{-- CONTENT --}}
        <div class="container mt-5">
            <div class="card-menunggu-konfirmasi row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary h-100 py-2 px-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <p class="mb-1 text-card text-uppercase" style="font-weight: 700;">Menunggu Konfirmasi</p>
                                    <p class="h5 mb-0 font-weight-bold text-gray-800">4</p>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-clipboard-check fs-3 text-dark"></i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection