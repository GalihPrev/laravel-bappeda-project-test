@extends('layouts.base')


@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">

            <div class="col-md-6">
                <br>
                <div class="col-md-6">
                    <a href="{{URL::to('masyarakat/dashboard-mb')}}" class="btn btn-primary">Tambah
                        Aspirasi</a>

                </div><!-- End Button -->

                <div class="col-md-6">
                    <br>
                    <div class="row">
                        <div class="col-md-3 offset-md-3">
                            <div class="search-bar">
                                <form class="search-form d-flex align-items-center" method="GET" action="">
                                    <input type="text" name="search" placeholder="search" title="Enter search keyword">
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
                        <th scope="col">Permasalahan</th>
                        <th scope="col">Penyebab</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Usulan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formAspirasi as $data)
                    {{ $data }}
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data -> permasalahan }}</td>
                        <td>{{ $data -> penyebab }}</td>
                        <td>{{ $data -> lokasi }}</td>
                        <td>{{ $data -> usulan }}</td>
                        <td>{{ $data -> keterangan }} </td>
                        <td>

                            <a href="{{ route('edit.data', $data->id) }}" class="btn btn-primary">Edit</a>

                        </td>




                        @endforeach
                </tbody>
                
            </table>

            <div class='my-5'>
                {{ $formAspirasi->withQueryString()->links() }}
            </div>
        </div>
    </div>

    @endsection