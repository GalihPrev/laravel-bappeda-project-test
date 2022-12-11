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
{{-- {{ $formAspirasi }} --}}

<body>

  @include('layouts.sidebar')

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
                @yield('content')
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