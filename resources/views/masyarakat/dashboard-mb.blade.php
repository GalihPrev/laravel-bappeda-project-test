@extends('layouts.base')


@section('content')

<div class="card">
  <div class="card-body">
    <br>
    <!-- General Form Elements -->
    <form action="riwayat-m" method="POST">
      @csrf
      <h6 style="text-align:right;">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Panduan">Panduan
          <i class="bi bi-question-circle"></i></button>
      </h6>

      <!-- POP UP -->
      <div class="modal fade" id="Panduan" role="dialog" arialabelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Panduan</h5>
              <button type="button" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i></button>
            </div>

            <div class="modal-body">
              <div class="row mb-3">
                <div class="col-sm-12">
                  <textarea class="form-control" style="height: 50px" placeholder="Permasalahan"
                    readonly>Jalan Rusak</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <textarea class="form-control" style="height: 75px" placeholder="Penyebab"
                    readonly>Kendaraan Besar</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <textarea class="form-control" style="height: 50px" placeholder="Lokasi"
                    readonly>Jl. Semanggi</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <textarea class="form-control" style="height: 50px" placeholder="Usulan" readonly>Aspal</textarea>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-12">
                  <textarea class="form-control" style="height: 100px" placeholder="Keterangan"
                    readonly>Banyak Lubang</textarea>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- pop up end -->

      <div class="row mb-3">
        <div class="col-sm-12">
          <textarea class="form-control" style="height: 50px" placeholder="permasalahan" name="permasalahan"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12">
          <textarea class="form-control" style="height: 75px" placeholder="Penyebab" name="penyebab"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12">
          <textarea class="form-control" style="height: 50px" placeholder="Lokasi" name="lokasi"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12">
          <textarea class="form-control" style="height: 50px" placeholder="Usulan" name="usulan"></textarea>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-12">
          <textarea class="form-control" style="height: 100px" placeholder="Keterangan" name="keterangan"></textarea>
        </div>
      </div>

      {{-- Hidden id users --}}
      <div class="row mb-3">
        <div class="col-sm-12 ">
          @foreach ($user as $data)
          <input type="hidden" name="users_id" id="users" placeholder="{{ $data->username }}"
            value=" {{ Auth::user()->id  }}" readonly>
          @endforeach
        </div>
      </div>


      {{-- add data keluarhan --}}
      <div class="row mb-3">
        <div class="col-sm-12 ">
          @foreach ($kelurahan as $data)

          <input type="hidden" name="kelurahan_id" id="kelurahans" placeholder="{{ $data->name }}"
            value=" {{ Auth::user()->kelurahan->id  }}" readonly>
          @endforeach
        </div>
      </div>


      <div style="text-align:right">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>

  </div>
</div>

</div>
</div>
</section>


</main><!-- End #main -->
@endsection