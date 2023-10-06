@extends('layouts.admin')

@section('content')

    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            overflow: hidden;
            background-color: #343a40;
        }

        .content-wrapper {
            overflow: hidden;
            width: 100%;
            height: 100vh;
            max-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 20px;
            margin-top: 40px;
        }

        .scroll-to-top {
            position: fixed;
            right: 15px;
            bottom: 3px;
            display: none;
            width: 50px;
            height: 50px;
            text-align: center;
            color: white;
            background: rgba(52, 58, 64, 0.5);
            line-height: 45px;
        }

        .scroll-to-top:focus,
        .scroll-to-top:hover {
            color: white;
        }

        .scroll-to-top:hover {
            background: #343a40;
        }

        .scroll-to-top i {
            font-weight: 800;
        }

        .smaller {
            font-size: 0.7rem;
        }

        .o-hidden {
            overflow: hidden !important;
        }

        .z-0 {
            z-index: 0;
        }

        .z-1 {
            z-index: 1;
        }





        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: -25px;
            right: -25px;
            font-size: 5rem;
            -webkit-transform: rotate(15deg);
            -ms-transform: rotate(15deg);
            transform: rotate(15deg);
        }

        @media (min-width: 576px) {
            .card-columns {
                column-count: 1;
            }
        }

        @media (min-width: 768px) {
            .card-columns {
                column-count: 2;
            }
        }

        @media (min-width: 1200px) {
            .card-columns {
                column-count: 2;
            }
        }


        /* CSS untuk menempatkan tombol di tengah */
        .btnnn {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        /* CSS untuk tombol */
        button {
            margin: 10px;
            padding: 2px 4px;
            font-size: 16px;

        }

        .p{
            background-color: #343a40;
            overflow: hidden;
           padding-bottom: 20px;
           text-align: start ;
           color: #ffffff;
           width: 100%;
           margin: 0

        }
        .col-xl-3{

        }
    </style>
    <div class="text">
        <div class="navbar-link-header pt-3 px-5">
            <h3 style="color: #fff">Karyawan</h3>
            <p style="color: #fff">Dashboard</p>
        </div>

        <div class="content-wrapper ">
            <div class="container-fluid mr-5 ml-5">
                <!-- Icon Cards-->
                <div class="row " >
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden ">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">Menunggu Konfirmasi</div>
                                <div class="mr-5">{{ $menungguKonfirmasi }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">Pengguna</div>
                                <div class="mr-5 mt-2 ml-4">{{ $totalUser }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">Jumlah FIlm</div>
                                <div class="mr-5">{{ $jumlahFilm }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">Tiket Terjual</div>
                                <div class="mr-5">{{ $jumlahTicket }}</div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Area Chart Example-->
                <div style="width: 80%; height: auto; margin: 0 auto;">
                    <canvas id="myLineChart"></canvas>
                </div>
                <script>
                    // Data penghasilan bulanan
                    var pendapatanBulanan = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"],
                        datasets: [{
                            label: 'Penghasilan Bulanan',
                            data: [1000, 1200, 1500, 1300, 1700, 1600, 1800, 2000, 1900, 2100, 2200, 2300],
                            fill: true,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderWidth: 2
                        }]
                    };

                    // Data penghasilan tahunan
                    var pendapatanTahunan = {
                        labels: ["2021", "2022", "2023"],
                        datasets: [{
                            label: 'Penghasilan Tahunan',
                            data: [24000, 26000, 28000],
                            fill: true,
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderWidth: 2
                        }]
                    };

                    var ctx = document.getElementById('myLineChart').getContext('2d');
                    var myLineChart = new Chart(ctx, {
                        type: 'line',
                        data: pendapatanBulanan, // Secara default, tampilkan data bulanan
                        options: {
                            responsive: true,
                            legend: {
                                display: true,
                                position: 'top'
                            },
                            title: {
                                display: true,
                                text: 'Grafik Penghasilan Bulanan',
                                fontSize: 18
                            },
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        display: false
                                    },
                                    ticks: {
                                        fontSize: 14
                                    }
                                }],
                                yAxes: [{
                                    gridLines: {
                                        display: true
                                    },
                                    ticks: {
                                        beginAtZero: true,
                                        fontSize: 14
                                    }
                                }]
                            },
                            animation: {
                                duration: 1000,
                                easing: 'easeInOutQuart'
                            }
                        }
                    });

                    // Fungsi untuk beralih antara data bulanan dan tahunan
                    function tampilkanBulanan() {
                        myLineChart.data = pendapatanBulanan;
                        myLineChart.options.title.text = 'Grafik Penghasilan Bulanan';
                        myLineChart.update();
                    }

                    function tampilkanTahunan() {
                        myLineChart.data = pendapatanTahunan;
                        myLineChart.options.title.text = 'Grafik Penghasilan Tahunan';
                        myLineChart.update();
                    }
                </script>
                </body>
            @endsection
