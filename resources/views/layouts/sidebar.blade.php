{{-- If role == masyarakat can access dashbaord masyarakat --}}

@if (Auth::user()->role_id == 1)

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <a class="nav-profile d-flex align-items-center pe-0" href="{{URL::to('masyarakat/riwayat-m')}}">
            <img src="{{asset ('build/assets/img/unnamed.jpg') }}" alt="Profile" class="rounded-circle" width="100"
                height="100">
            <div class="row">
                <div class="col">

                    <h4 class="d-none d-md-block ps-3">{{ Auth::user()->username }}</h4>

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
                <span>Form Aspirasi</span>
            </a>
        </li><!-- End Riwayat Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href={{URL::to('masyarakat/profile-m')}}>
                <i class="bi bi-person"></i>
                <span>Ganti Password</span>
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
@endif


@if (Auth::user()->role_id == 3)

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <a class="nav-profile d-flex align-items-center pe-0" href="#">
            <img src="{{asset ('build/assets/img/unnamed.jpg') }}" alt="Profile" class="rounded-circle" width="100"
                height="100">
            <div class="row">
                <div class="col">

                    <h4 class="d-none d-md-block ps-3">{{ Auth::user()->username }}</h4>

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
            <a class="nav-link collapsed" href="{{URL::to('kelurahan/profile-k')}}">
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
@endif


@if (Auth::user()->role_id == 2)

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <a class="nav-profile d-flex align-items-center pe-0" href="#">
            <img src="{{asset ('build/assets/img/unnamed.jpg') }}" alt="Profile" class="rounded-circle" width="100"
                height="100">
            <div class="row-profile">
                <div class="col">
                    <h4 class="d-none d-md-block ps-3">{{ Auth::user()->username }}</h4>
                </div>
                <div class="col">
                    <span class="d-none d-md-block ps-3">Kota Malang</span>
                </div>
            </div>
        </a><!-- End Image Profile Nav -->

        <br>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{URL::to('bappeda/dashboard-b')}}">
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
                    <a class="nav-link collapsed" href="{{URL::to('bappeda/table-bkel')}}">
                        <i class="bi bi-circle"></i><span>Kelurahan</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link collapsed" href="{{URL::to('bappeda/table-bkat')}}">
                        <i class="bi bi-circle"></i><span>Kategori</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{URL::to('bappeda/list-akun')}}">
                <i class="bi bi-person-lines-fill"></i>
                <span>List Akun</span>
            </a>
        </li><!-- End Add Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{URL::to('/profile')}}">
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
@endif