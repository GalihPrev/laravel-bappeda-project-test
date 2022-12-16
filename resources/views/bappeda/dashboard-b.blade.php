@extends('layouts.base')


@section('content')

</head>

<body>


    <main id="main" class="main">
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