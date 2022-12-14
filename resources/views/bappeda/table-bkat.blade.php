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

        <section class="section">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <br>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Dinas/OPD</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
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
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jalan Rusak</td>
                                    <td>Kendaraan Besar</td>
                                    <td>Jl. Semanggi</td>
                                    <td>Aspal</td>
                                    <td>Banyak Lubang</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jalan Rusak</td>
                                    <td>Kendaraan Besar</td>
                                    <td>Jl. Semanggi</td>
                                    <td>Aspal</td>
                                    <td>Banyak Lubang</td>
                                </tr>
                            </tbody>
                        </table><!-- End Table -->

                        <div class="dataTable-bottom">
                            <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                            <nav class="dataTable-pagination">
                                <ul class="dataTable-pagination-list"></ul>
                            </nav>

                            <div class="dataTable-search">
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
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
    @endsection