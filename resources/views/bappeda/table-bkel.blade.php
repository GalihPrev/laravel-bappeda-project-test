@extends('layouts.base')


@section('content')
{{-- {{ dd($dataKelurahan) }} --}}

<section class="section">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-5">


                        <form action="{{ route('table-bkel') }}" method="GET">
                            @csrf
                            <select class="form-select" name="filter_id" aria-label="Default select example">
                                <option selected>Kelurahan</option>
                                @foreach ($dataKelurahan as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>

                    </div>
                    <div class="col ms-auto">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>

                    </form>

                    <div class="col-md-4 ms-auto">
                        <div class="search-bar">
                            <form class="search-form d-flex align-items-center" method="POST" action="#">
                                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div><!-- End Search Bar -->

                </div><!-- End Form Bar -->

                <br>

                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Kelurahan</th>
                                <th scope="col">Permasalahan</th>
                                <th scope="col">Penyebab</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Usulan</th>
                                <th scope="col">Keterangan</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataBappeda as $data)

                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama_kelurahan }}</td>
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

            </div>
            <div class="dataTable-bottom">
                <div class="dataTable-search">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#print">Print</button>
                </div>
            </div><!-- End Table Bottom -->

            <div class="modal fade" id="kategori" role="dialog" arialabelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Kategori</h5>
                            <button type="button" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i></button>
                        </div>

                        <div class="modal-body">
                            <div class="row mb-3">
                                <h6>Kecamatan</h6>
                                <div class="col-md-12">
                                    <button type="button"
                                        class="btn btn-secondary rounded-pill btn-sm">Blimbing</button>
                                    <button type="button"
                                        class="btn btn-secondary rounded-pill btn-sm">Kedungkandang</button>
                                    <button type="button" class="btn btn-secondary rounded-pill btn-sm">Klojen</button>
                                    <button type="button"
                                        class="btn btn-secondary rounded-pill btn-sm">Lowokwaru</button>
                                    <button type="button" class="btn btn-secondary rounded-pill btn-sm">Sukun</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <h6>Perangkat Daerah</h6>
                                    <div class="col-md-12">
                                        <button type="button"
                                            class="btn btn-secondary rounded-pill btn-sm">Blimbing</button>
                                        <button type="button"
                                            class="btn btn-secondary rounded-pill btn-sm">Kedungkandang</button>
                                        <button type="button"
                                            class="btn btn-secondary rounded-pill btn-sm">Klojen</button>
                                        <button type="button"
                                            class="btn btn-secondary rounded-pill btn-sm">Lowokwaru</button>
                                        <button type="button"
                                            class="btn btn-secondary rounded-pill btn-sm">Sukun</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</a>
                            <a type="button" class="btn btn-primary" href="table-bkel.html">Submit</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- kategori pop up end -->

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
                                        <th scope="col">Kelurahan</th>
                                        <th scope="col">Permasalahan</th>
                                        <th scope="col">Penyebab</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Usulan</th>
                                        <th scope="col">Keterangan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataBappeda as $data)

                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->nama_kelurahan }}</td>
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
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            {{-- print according to the page --}}
                            <a href="{{ route('Bappeda-export.excel') }}">
                                <button type="button" class="btn btn-primary">Export</button>
                            </a>


                        </div>

                    </div>
                </div>
            </div>
            <!-- print pop up end -->

        </div>

    </div>
</section>

</main><!-- End #main -->
@endsection