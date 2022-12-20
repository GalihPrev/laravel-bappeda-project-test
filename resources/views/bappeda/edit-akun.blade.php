@extends('layouts.base')


@section('content')


{{-- {{ dd($user ) }} --}}
<section class="section profile">
    <div class="row">

        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form action="{{ route('update.akun', $user->id) }}" method="POST">
                                @method('PUT')
                                @csrf


                                <br>

                                <div class="row mb-3">
                                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="username" type="text" class="form-control" id="username"
                                            value="{{ $user->username }}">
                                    </div>
                                </div>
                                {{-- Edit password with md5 --}}


                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="text" class="form-control" id="password">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="kelurahan" class="col-md-4 col-lg-3 col-form-label">Kelurahan</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" value="{{ $user->kelurahan->name }}"
                                            readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-12 ">
                                        <input type="text" name="kelurahan_id" id="kelurahan_id"
                                            value="{{ $user->kelurahan_id  }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 ">
                                        <input type="text" name="role_id" id="role_id" value="{{ $user->role_id  }}"
                                            readonly>
                                    </div>
                                </div>

                                <div style="text-align:right">
                                    <button type="submit" class="btn btn-warning">Save</button>
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