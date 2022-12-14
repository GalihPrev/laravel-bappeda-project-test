@extends('layouts.base')


@section('content')

</head>

<body>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <a class="nav-profile d-flex align-items-center pe-0" href="#">
                <img src="assets/img/unnamed.jpg" alt="Profile" class="rounded-circle" width="100" height="100">
                <div class="row">
                    <div class="col">
                        <h4 class="d-none d-md-block ps-3">BAPPEDA</h4>
                    </div>
                    <div class="col">
                        <span class="d-none d-md-block ps-3">Kota Malang</span>
                    </div>
                </div>
            </a><!-- End Image Profile Nav -->

            <br>

            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboard-b.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a class="nav-link collapsed" href="table-bkel.html">
                            <i class="bi bi-circle"></i><span>Kelurahan</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link collapsed" href="table-bkat.html">
                            <i class="bi bi-circle"></i><span>Kategori</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="profile.html">
                    <i class="bi bi-person"></i>
                    <span>Akun</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li id="footer">
                <div class="container">
                    <div class="copyright">
                        <a class="nav-link collapsed" href="login.html">
                            <i class="bi bi-box-arrow-in-left"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </li><!-- End Logout Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="container align-right-logo">
            <div id="logo">
                <a><img src="http://bappeda.malangkota.go.id/web/wp-content/uploads/2021/04/logo-bappeda_new.png"
                        alt="logo-bappeda" width="400" height="100"></a>
            </div>
        </div><!-- End Logo -->

        <br>

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jumlah Masukan</h5>

                            <!-- Pie Chart -->
                            <canvas id="pieChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#pieChart'), {
                                        type: 'pie',
                                        data: {
                                        labels: [
                                            'Belum mengumpulkan',
                                            'Sudah mengumpulkan'
                                        ],
                                        datasets: [{
                                            label: 'My First Dataset',
                                            data: [70, 30],
                                            backgroundColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(54, 162, 235)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                        }
                                    });
                                    });
                            </script>
                            <!-- End Pie CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jumlah Kelurahan</h5>

                            <!-- Pie Chart -->
                            <canvas id="pieChart1" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#pieChart1'), {
                                        type: 'pie',
                                        data: {
                                        labels: [
                                            'Belum mengumpulkan',
                                            'Sudah mengumpulkan'
                                        ],
                                        datasets: [{
                                            label: 'My First Dataset',
                                            data: [70, 30],
                                            backgroundColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(54, 162, 235)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                        }
                                    });
                                    });
                            </script>
                            <!-- End Pie CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jumlah Kecamatan</h5>

                            <!-- Pie Chart -->
                            <canvas id="pieChart2" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#pieChart2'), {
                                        type: 'pie',
                                        data: {
                                        labels: [
                                            'Belum mengumpulkan',
                                            'Sudah mengumpulkan'
                                        ],
                                        datasets: [{
                                            label: 'My First Dataset',
                                            data: [70, 30],
                                            backgroundColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(54, 162, 235)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                        }
                                    });
                                    });
                            </script>
                            <!-- End Pie CHart -->

                        </div>
                    </div>
                </div>

            </div>

        </section>

        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary" type="button">View More</button>
        </div><!-- End View Button -->

    </main><!-- End #main -->

    @endsection