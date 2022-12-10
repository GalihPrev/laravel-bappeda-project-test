<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

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
                        <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
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

            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">

                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <img src="assets/img/unnamed.jpg" alt="Profile" class="rounded-circle">
                                <h2>Joko W</h2>
                                <h3>Lowokwaru</h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                                        <!-- Profile Edit Form -->
                                        <form>
                                            <div class="row mb-3">
                                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img src="assets/img/unnamed.jpg" alt="Profile">
                                                    <div class="pt-2">
                                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="nama" type="text" class="form-control" id="nama" value="Joko W">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="username" type="text" class="form-control" id="username" value="jokowow">
                                                </div>
                                            </div>

                                            <h5 class="card-title">Ubah Password</h5>

                                            <div class="row mb-3">
                                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="password" class="form-control" id="currentPassword">
                                                </div>
                                            </div>
                          
                                            <div class="row mb-3">
                                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                                                </div>
                                            </div>
                          
                                            <div class="row mb-3">
                                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main><!-- End #main -->

        

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.min.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

</html>