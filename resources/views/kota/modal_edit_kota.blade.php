<div class="modal fade" id="exampleModal{{$kota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Kota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/edit_kab_kota/{{$kota->id}}" enctype="multipart/form-data" method="post" id="myForm">
            {{ csrf_field() }}
          <div class="form-group row">
              <label for="kota" class="col-md-4 col-form-label text-md-right">{{ __('Nama kota') }}</label>

              <div class="col-md-6">
                  <textarea name="kota" style="font-size: 15px" class="form-control{{ $errors->has('kota') ? ' is-invalid' : '' }}" placeholder="Masukkan kota" id="kota" value="{{ old('kota') ? old('kota') : $kota->kota }}" required>{{ $kota->kota }}</textarea>
                  @if ($errors->has('kota'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('kota') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

        <br style="margin-bottom: 10px">
            <div class="form-group">
              {{-- <input type="hidden" class="form-control" name="permohonan_id" id="permohonan_id" value="">
              <input type="hidden" class="form-control" name="namapermohonan" id="namapermohonan" value=""> --}}
            </div>

            {{-- <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div> --}}
            @csrf
            @method('POST')
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="fa fa-save"> Save</i></button>
              <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script> -->


  @section('addjs')
    <script>
      $('#exampleModal{{$kota->id}}').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal

        var kota = button.data('kota')
        // var userid = button.data('userid')
        // var namapermohonan = button.data('user_name')


        var modal = $(this)

        modal.find('.modal-body #kota').val(kota);
        // modal.find('.modal-body #userid').val(userid);
        // modal.find('.modal-body #namapermohonan').val(namapermohonan);
      })
    </script>
  @endsection
