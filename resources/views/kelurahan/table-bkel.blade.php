<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tabel Kelurahan</title>
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
                        <a class="nav-link collapsed" href="table-bkel.html">
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

        <section class="section">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Kelurahan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Kecamatan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </form>
                            </div><!-- End Option Bar -->

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
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jalan Rusak</td>
                                    <td>Kendaraan Besar</td>
                                    <td>Jl. Semanggi</td>
                                    <td>Aspal</td>
                                    <td>Banyak Lubang</td>
                                    <td><button type="button" class="btn btn-primary">Kategori</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jalan Rusak</td>
                                    <td>Kendaraan Besar</td>
                                    <td>Jl. Semanggi</td>
                                    <td>Aspal</td>
                                    <td>Banyak Lubang</td>
                                    <td><button type="button" class="btn btn-primary">Kategori</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jalan Rusak</td>
                                    <td>Kendaraan Besar</td>
                                    <td>Jl. Semanggi</td>
                                    <td>Aspal</td>
                                    <td>Banyak Lubang</td>
                                    <td><button type="button" class="btn btn-primary">Kategori</button></td>
                                </tr>
                            </tbody>
                        </table><!-- End Table -->

                        <div class="dataTable-bottom">
                            <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                            <nav class="dataTable-pagination">
                                <ul class="dataTable-pagination-list"></ul>
                            </nav>
                        </div><!-- End Table Bottom -->

                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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