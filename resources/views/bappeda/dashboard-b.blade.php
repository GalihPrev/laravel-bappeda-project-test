@extends('layouts.base')


@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Usulan</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $countDataUsulan }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Card 1 -->

        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Kelurahan</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-house-door"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $countDataKelurahan }} <span>/ 57</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Card 2-->

        <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Kecamatan</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="ps-3">
                            <h6>145 <span>/ 200</span></h6>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End Card 3-->

    </div>

</section>

<div class="d-grid gap-2 mt-3">
    <a class="btn btn-primary" type="button" href={{URL::to('bappeda/table-bkel')}}>View More</a>
</div><!-- End View Button -->

</main><!-- End #main -->

@endsection