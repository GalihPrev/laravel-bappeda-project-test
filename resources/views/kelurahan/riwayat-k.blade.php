@extends('layouts.base')


@section('content')
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

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Keterangan</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Bratas</td>
                    <td>12-12-2001</td>
                    <td>07.30</td>
                    <td>rusak</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bratas</td>
                    <td>12-12-2001</td>
                    <td>07.30</td>
                    <td>rusak</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Bratas</td>
                    <td>12-12-2001</td>
                    <td>07.30</td>
                    <td>rusak</td>

                </tr>
            </tbody>
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
    </div>
</div>
</div>
</section>

</main><!-- End #main -->

@endsection