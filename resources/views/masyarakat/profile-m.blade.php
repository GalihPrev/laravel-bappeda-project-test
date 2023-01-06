@extends('layouts.base')


@section('content')

{{-- {{ dd($user) }} --}}
<section class="section profile">
    @if ($errors->any())
    <div class="alert alert-danger border-left-danger" role="alert">
        <ul class="pl-4 my-2">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="col-xl-8">
        <div class="card">
            <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                        <!-- Profile Edit Form -->
                        <form action="{{ route('update.akun-m', $user->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="row mb-3">
                                <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nama" type="text" class="form-control" id="nama"
                                        value="{{ Auth::user()->kelurahan->name }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="username" type="text" class="form-control" id="username"
                                        value="{{ Auth::user()->username }}" readonly>
                                </div>
                            </div>

                            <h5 class="card-title">Ubah Password</h5>

                            {{-- Display password decrypt md5 to text --}}
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-lg-3 col-form-label">Old Password </label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="current_password" type="text" class="form-control"
                                        id="current_password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-lg-3 col-form-label">New Password </label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="new_password" type="text" class="form-control" id="new_password">
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
                                    <input type="hidden" name="kelurahan_id" id="kelurahan_id"
                                        value="{{ $user->kelurahan_id  }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 ">
                                    <input type="hidden" name="role_id" id="role_id" value="{{ $user->role_id  }}"
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

</main><!-- End #main -->
@endsection