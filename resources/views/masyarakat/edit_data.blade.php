@extends('layouts.base')


@section('content')


<div class="card">  <div class="card-body">
    <br>

    <form action="{{ route('update.data', $formAspirasi->id) }}" method="POST">
      @method('PUT')
      @csrf
      <div class="row mb-3">
        <div class="col-sm-12">
          <input class="form-control" style="height: 50px" placeholder="{{ $formAspirasi->permasalahan }}"
            name="permasalahan" value="{{ $formAspirasi->permasalahan }}"></input>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12">
          <input class="form-control" style="height: 75px" placeholder="{{ $formAspirasi->penyebab }}" name="penyebab"
            value="{{ $formAspirasi->penyebab }}"></input>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12">
          <input class="form-control" style="height: 50px" placeholder="{{ $formAspirasi->lokasi }}" name="lokasi"
            value="{{ $formAspirasi->lokasi }}"></input>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12">
          <input class="form-control" style="height: 50px" placeholder="{{ $formAspirasi->usulan }}" name="usulan"
            value="{{ $formAspirasi->usulan }}"></input>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-12">
          <input class="form-control" style="height: 100px" placeholder="{{ $formAspirasi->keterangan }}"
            name="keterangan" value="{{ $formAspirasi->keterangan }}" name="keterangan"></input>
        </div>
      </div>

   
      <div class="row mb-3">
        <div class="col-sm-12 ">
          <input type="hidden" name="users_id" id="users_id" placeholder="{{ $formAspirasi->users_id  }}"
            value=" {{ $formAspirasi->users_id  }}" readonly>
        </div>

  
        <div class="row mb-3">
          <div class="col-sm-12 ">
            <input type="hidden" name="kelurahan_id" id="kelurahan_id" placeholder="{{ $formAspirasi->kelurahan_id  }}"
              value="{{ $formAspirasi->kelurahan_id  }}" readonly>
          </div>

          
          <div class="row mb-3">
            <div class="col-sm-12 ">
              <input type="hidden" name="form_aspirasi_id" id="form_aspirasi_id	" placeholder="{{ $formAspirasi->id }}"
                value=" {{ $formAspirasi->id  }}" readonly>
            </div>
          </div>


          <div style="text-align:right">
            <button type="submit" class="btn btn-warning">Save</button>
          </div>

    </form>

  </div>
</div>

</div>
</div>
</section>


</main><!-- End #main -->
@endsection