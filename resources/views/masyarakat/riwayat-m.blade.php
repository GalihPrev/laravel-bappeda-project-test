<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png ') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bulid/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('build/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('build/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Template Main CSS File -->
    <link href="{{asset('build/assets/css/style.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" hre=build/assets/css/syle.css"> -->
    <!-- =======================================================
    * Template Name: NiceAdmin - v2.4.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
{{ $formAspirasi }}

<body>

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <a class="nav-profile d-flex align-items-center pe-0" href="#">
                <img src="{{asset ('build/assets/img/unnamed.jpg') }}" alt="Profile" class="rounded-circle" width="100"
                    height="100">
                <div class="row">
                    <div class="col">
                        <h4 class="d-none d-md-block ps-3">Fulan</h4>
                    </div>
                    <div class="col">
                        <span class="d-none d-md-block ps-3">Lowokwaru</span>
                    </div>
                </div>
            </a><!-- End Image Profile Nav -->

            <br>

            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboard-m.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="riwayat-m.html">
                    <i class="bi bi-clock-history"></i>
                    <span>Riwayat</span>
                </a>
            </li><!-- End Riwayat Nav -->

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

        <section class="section">
            <div class="col-lg-16">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <br>
                                <div class="col-md-6">
                                    {{-- Button to page dashboard-md with route--}}
                                    <a href="{{URL::to('masyarakat/dashboard-mb')}}" class="btn btn-primary">Tambah
                                        Aspirasi</a>

                                    {{-- <button type="button" class="btn btn-primary" href="dashboard-mb">Tambah
                                        Aspirasi</button> --}}
                                </div>
                            </div><!-- End Button -->

                            <div class="col-md-6">
                                <br>
                                <div class="row">
                                    <div class="col-md-3 offset-md-3">
                                        <div class="search-bar">
                                            <form class="search-form d-flex align-items-center" method="POST"
                                                action="#">
                                                <input type="text" name="query" placeholder="Search"
                                                    title="Enter search keyword">
                                                <button type="submit" title="Search"><i
                                                        class="bi bi-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Search Bar -->

                        </div><!-- End Form Bar -->

                        <br>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Permasalahan</th>
                                    <th scope="col">Penyebab</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Usulan</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formAspirasi as $data)
                                {{ $data }}
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data -> nama }}</td>
                                    <td>{{ $data -> penyebab }}</td>
                                    <td>{{ $data -> lokasi }}</td>
                                    <td>{{ $data -> usulan }}</td>
                                    <td>{{ $data -> keterangan }}

                                    </td>
                                    @endforeach
                            </tbody>

                        </table>

                        <div class='my-5'>
                            {{ $formAspirasi->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->


    <!-- Vendor JS Files -->
    <script src="{{ asset ('build/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset ('build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset ('build/assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{ asset ('build/assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset ('build/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ asset ('build/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset ('build/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset ('build/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset ('build/assets/js/main.js')  }}"></script>


</body>

</html>