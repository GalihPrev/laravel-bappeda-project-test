
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
            <a class="nav-link collapsed" href="{{URL::to('masyarakat/dashboard-mb')}}">
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
                    <a class="nav-link collapsed" href="/logout">
                        <i class="bi bi-box-arrow-in-left"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </li><!-- End Logout Page Nav -->

    </ul>

</aside><!-- End Sidebar-->