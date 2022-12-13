@extends('layouts.base')


@section('content')

{{-- {{ dd($formAspirasi); }} --}}
<div class="card">
    <div class="card-body">
        <div class="row justify-content-end">

            <div class="col-md-6">
                <br>
                <div class="row">
                    <div class="col-md-3 offset-md-3">
                        <div class="search-bar">
                            <form class="search-form d-flex align-items-center" method="POST" action="#">
                                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- End Search Bar -->

        </div><!-- End Form Bar -->

        <br>
        <form action="riwayat-k" method="POST">
            @csrf
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
                    {{-- {{ $data -> id }} --}}

                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data -> permasalahan }}</td>
                        <td>{{ $data -> penyebab }}</td>
                        <td>{{ $data -> lokasi }}</td>
                        <td>{{ $data -> usulan }}</td>
                        <td>{{ $data -> keterangan }}

                        <td>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-danger">Delete</button>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>

            </div><br>
        </form>
        <!-- End Table Bottom -->
        <div>
            {{ $formAspirasi-> withQueryString()->links() }}
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
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        {{-- print according to the page --}}
                        <a href="{{ route('export.excel') }}">
                            <button type="button" class="btn btn-primary">Export</button>
                        </a>


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
@endsection