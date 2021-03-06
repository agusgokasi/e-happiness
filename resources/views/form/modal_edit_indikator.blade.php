<div class="modal fade" id="exampleModal{{$form->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit The Indicator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/editindikator/{{$form->id}}" enctype="multipart/form-data" method="post" id="myForm">
          {{ csrf_field() }}
        <div class="form-group row">
            <label for="soal" class="col-md-4 col-form-label text-md-right">{{ __('Indicator`s name') }}</label>

            <div class="col-md-6">
                <textarea name="soal" style="font-size: 15px" class="form-control{{ $errors->has('soal') ? ' is-invalid' : '' }}" placeholder="Input the indicator" id="soal" value="{{ old('soal') ? old('soal') : $form->soal }}" required>{{ $form->soal }}</textarea>
                @if ($errors->has('soal'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('soal') }}</strong>
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
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
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
    $('#exampleModal{{$form->id}}').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered
       modal

      var soal = button.data('soal')
      // var userid = button.data('userid')
      // var namapermohonan = button.data('user_name')


      var modal = $(this)

      modal.find('.modal-body #soal').val(soal);
      // modal.find('.modal-body #userid').val(userid);
      // modal.find('.modal-body #namapermohonan').val(namapermohonan);
    })
  </script>
@endsection
