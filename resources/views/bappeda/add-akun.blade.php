@extends('layouts.base')


@section('content')


{{-- {{ dd($kelurahan ) }} --}}
<section class="section profile">
    <div class="row">

        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form action="list-akun" method="POST">
                                @csrf
                                <div>
                                    <div class="col-lg-1 mx-auto">
                                        <img src="{{ asset('build/assets/img/unnamed.jpg') }}" class="center"
                                            alt="Profile">
                                    </div>
                                </div>

                                <br>

                                <div class="row mb-3">
                                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="username" type="text" class="form-control" id="username">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="password">
                                    </div>
                                </div>
                                {{-- drop down get value from table kelurahan by kelurhan_id --}}

                                <div class="row mb-3">
                                    <label for="kelurahan" class="col-md-4 col-lg-3 col-form-label">Kelurahan</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select name="kelurahan_id" class="form-select" id="kelurahan_id">

                                            <option selected>Pilih Kelurahan</option>
                                            @foreach ($kelurahan as $data )
                                            <option value="{{$data->id }}">{{$data->name }}</option>
                                            @endforeach



                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select name="role_id" class="form-select" id="role_id">

                                            <option selected>Pilih Role</option>
                                            @foreach ($role as $data )

                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="text-center"> <br>
                                        <button type="submit" class="btn btn-primary">Add Account</button>
                                    </div>
                            </form><!-- End Profile Edit Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection