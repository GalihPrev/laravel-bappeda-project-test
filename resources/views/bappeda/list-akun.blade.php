@extends('layouts.base')


@section('content')



<section class="section">
    <div class="col-lg-16">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
                        <br>
                        <div class="col-md-6">
                            <a type="button" class="btn btn-primary" href="{{URL::to('bappeda/add-akun')}}">Tambah
                                Akun</a>
                        </div>
                    </div><!-- End Button -->

                    <div class=" col-md-6>
                                <br>
                                <div class=" row">
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

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $data )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama_kelurahan }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->password }}</td>
                        <td>{{ $data->nama_role }}</td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="bi bi-pencil"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#hapus"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                </tbody>
                @endforeach
            </table>

            <div class="dataTable-bottom">
                <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                <nav class="dataTable-pagination">
                    <ul class="dataTable-pagination-list"></ul>
                </nav>
            </div>

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

            <!-- POP UP -->
            <div class="modal fade" id="hapus" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-3 mx-auto">
                                        <div class="icon-delete">
                                            <i class="bi bi-exclamation-triangle-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Apakah Anda yakin ingin menghapus akun ini?</p>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</a>
                            <a type="button" class="btn btn-primary" href="list-akun.html">Hapus</a>
                        </div>
                    </div>
                </div>
            </div><!-- pop up end -->
        </div>
    </div>
    </div>
</section>


@endsection