@extends('layouts.base')


@section('content')



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
                                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                                        <input type="text" name="query" placeholder="Search"
                                            title="Enter search keyword">
                                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
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
                            <th scope="col">OPD</th>
                            <th scope="col">Permasalahan</th>
                            <th scope="col">Penyebab</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Usulan</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bappeda</td>
                            <td>Jalan Rusak</td>
                            <td>Kendaraan Besar</td>
                            <td>Jl. Semanggi</td>
                            <td>Aspal</td>
                            <td>Banyak Lubang</td>
                        </tr>
                        <tr>
                            <td>Bappeda</td>
                            <td>Jalan Rusak</td>
                            <td>Kendaraan Besar</td>
                            <td>Jl. Semanggi</td>
                            <td>Aspal</td>
                            <td>Banyak Lubang</td>
                        </tr>
                        <tr>
                            <td>Bappeda</td>
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
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#print">Print</button>
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

                <div class="modal fade" id="print" role="dialog" arialabelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Preview Dokumen </h5>
                            </div>

                            <div class="modal-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">OPD</th>
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
                                            <td>Bappeda</td>
                                            <td>Jalan Rusak</td>
                                            <td>Kendaraan Besar</td>
                                            <td>Jl. Semanggi</td>
                                            <td>Aspal</td>
                                            <td>Banyak Lubang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bappeda</td>
                                            <td>Jalan Rusak</td>
                                            <td>Kendaraan Besar</td>
                                            <td>Jl. Semanggi</td>
                                            <td>Aspal</td>
                                            <td>Banyak Lubang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Bappeda</td>
                                            <td>Jalan Rusak</td>
                                            <td>Kendaraan Besar</td>
                                            <td>Jl. Semanggi</td>
                                            <td>Aspal</td>
                                            <td>Banyak Lubang</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal-footer">
                                <div class="col">
                                    <div class="col-lg-6">
                                        <b6>*Dokumen akan bertipe .excel</b6>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Export</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- print pop up end -->

            </div>
        </div>
    </div>
</section>

@endsection