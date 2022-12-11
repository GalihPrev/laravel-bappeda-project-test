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

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <a class="nav-profile d-flex align-items-center pe-0" href="#">
        <img src="{{asset ('build/assets/img/unnamed.jpg') }} " class="rounded-circle" width="100" height="100">
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
        <a class="nav-link collapsed" href="{{URL::to('masyarakat/dashboard-mb')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{URL::to('masyarakat/riwayat-m')}}">
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
            <a class="nav-link collapsed" href="/logout">
              <i class="bi bi-box-arrow-in-left"></i>
              <span>Logout</span>
            </a>
          </div>
        </div>
      </li><!-- End Logout Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="text-align:center">Layanan Pendataan Aspirasi Masyarakat </h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12 mx-auto">

          <div class="card">
            <div class="card-body">
              <br>
              <!-- General Form Elements -->
              <form action="riwayat-m" method="POST">
                @csrf
                <h6 style="text-align:right;">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Panduan">Panduan
                    <i class="bi bi-question-circle"></i></button>
                </h6>

                <!-- POP UP -->
                <div class="modal fade" id="Panduan" role="dialog" arialabelledby="ModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Panduan</h5>
                        <button type="button" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i></button>
                      </div>

                      <div class="modal-body">
                        <div class="row mb-3">
                          <div class="col-sm-12">
                            <textarea class="form-control" style="height: 50px" placeholder="Permasalahan"
                              readonly>Jalan Rusak</textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-12">
                            <textarea class="form-control" style="height: 75px" placeholder="Penyebab"
                              readonly>Kendaraan Besar</textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-12">
                            <textarea class="form-control" style="height: 50px" placeholder="Lokasi"
                              readonly>Jl. Semanggi</textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-12">
                            <textarea class="form-control" style="height: 50px" placeholder="Usulan"
                              readonly>Aspal</textarea>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <div class="col-sm-12">
                            <textarea class="form-control" style="height: 100px" placeholder="Keterangan"
                              readonly>Banyak Lubang</textarea>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- pop up end -->

                <div class="row mb-3">
                  <!--  <label for="inputText" class="col-sm-2 col-form-label"></label> -->
                  <div class="col-sm-12">
                    <textarea class="form-control" style="height: 50px" placeholder="permasalahan"
                      name="permasalahan"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <!-- <label for="inputEmail" class="col-sm-2 col-form-label">Email</label> -->
                  <div class="col-sm-12">
                    <textarea class="form-control" style="height: 75px" placeholder="Penyebab"
                      name="penyebab"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <!--  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label> -->
                  <div class="col-sm-12">
                    <textarea class="form-control" style="height: 50px" placeholder="Lokasi" name="lokasi"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <!-- <label for="inputNumber" class="col-sm-2 col-form-label">Number</label> -->
                  <div class="col-sm-12">
                    <textarea class="form-control" style="height: 50px" placeholder="Usulan" name="usulan"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <!-- <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label> -->
                  <div class="col-sm-12">
                    <textarea class="form-control" style="height: 100px" placeholder="Keterangan"
                      name="keterangan"></textarea>
                  </div>
                </div>

                {{-- Hidden id users --}}
                <div class="row mb-3">
                  <div class="col-sm-12 ">
                    @foreach ($user as $data)
                    <input type="hidden" name="users_id" id="users" placeholder="{{ $data -> username }}"
                      value=" {{ $data -> id }}" readonly>
                    @endforeach
                  </div>
                </div>


                {{-- add data keluarhan --}}
                <div class="row mb-3">
                  <div class="col-sm-12 ">
                    @foreach ($kelurahan as $data)

                    <input type="hidden" name="kelurahan_id" id="kelurahans" placeholder="{{ $data -> name }}"
                      value=" {{ $data -> id }}" readonly>
                    @endforeach
                  </div>
                </div>


                <div style="text-align:right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>

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