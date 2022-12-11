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

<body>
    {{-- {{ $formAspirasi }} --}}
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <a class="nav-profile d-flex align-items-center pe-0" href="#">
                <img src="{{ asset ('build/assets/img/unnamed.jpg') }}" alt="Profile" class="rounded-circle" width="100"
                    height="100">
                <div class="row">
                    <div class="col">
                        <h4 class="d-none d-md-block ps-3"> {{ Auth::user()->username }} </h4>
                    </div>
                    <div class="col">

                        <span class="d-none d-md-block ps-3">{{ Auth::user()->kelurahan->name }}</span>
                    </div>
                </div>
            </a><!-- End Image Profile Nav -->

            <br>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{URL::to('kelurahan/dashboard-k')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{URL::to('kelurahan/riwayat-k')}}">
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-end">

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
                                    <th scope="col">Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formAspirasi as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data -> permasalahan }}</td>
                                    <td>{{ $data -> penyebab }}</td>
                                    <td>{{ $data -> lokasi }}</td>
                                    <td>{{ $data -> usulan }}</td>
                                    <td>{{ $data -> keterangan }}

                                    <td>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-warning">Verified</button>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table><!-- End Table -->


                        <div class="dataTable-bottom">

                            <div class="col-md-3">
                                <div class="row justify-content-end">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#print">Print</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </div><br>
                        <!-- End Table Bottom -->
                        <div>
                            {{ $formAspirasi->withQueryString()->links() }}
                        </div>



                        <div class="modal fade" id="print" role="dialog" arialabelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Preview Dokumen </h5>
                                    </div>

                                    <div class="modal-body">
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
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $data -> permasalahan }}</td>
                                                    <td>{{ $data -> penyebab }}</td>
                                                    <td>{{ $data -> lokasi }}</td>
                                                    <td>{{ $data -> usulan }}</td>
                                                    <td>{{ $data -> keterangan }}

                                                    <td>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table><!-- End Table -->
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Export</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- pop up end -->
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