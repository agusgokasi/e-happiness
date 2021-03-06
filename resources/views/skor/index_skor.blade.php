@extends('layouts.app_guest')

@section('content')
<br><br><br>
<!-- <i class="fas fa-spin"> -->
<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <!-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('msg'))
    <div class="alert alert-succes" style="background-color: red">
        <p> {{ session('msg')}}</p>
    </div>
    @endif -->
    <div class="card">
      <div class="card-header" style="text-align: center;"><strong>{{ __('Family Happiness Test') }}</strong></div>
    <div class="container-fluid">
        <div class="card-body">
          <form method="post" role="form" action="/ce" enctype="multipart/form-data" id="myForm">
          {{ csrf_field() }}
            <div class="form-group row">
            <p class="grey-text text-center">
            <br>By filling these simple statistic based question forms, you are able to calculate your <b>family's happiness</b>. <br>Let's get started!
            <p>
            <br>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-md-5 col-form-label text-md-left">{{ __('Head Family Name') }}
                    <span style="color:red">*)</span>
                </label>
                <div class="col-md-7">
                    <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                    @if ($errors->has('nama'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="nik" class="col-md-5 col-form-label text-md-left">{{ __('NIK (ID number)') }}</label>

                <div class="col-md-7">
                    <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" autofocus>

                    @if ($errors->has('nik'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nik') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="jeniskelamin" class="col-md-5 col-form-label text-md-left">{{ __('Gender') }}
                    <span style="color:red">*)</span>
                </label>

                <div class="col-md-7">
                    <div class="form-check form-check-inline">
                        <input id="jeniskelamin" style="border: 0px;width: 15px;margin-bottom: 0px;margin-right: 5px;height: 15px;" type="radio" class=" form-control{{ $errors->has('jeniskelamin') ? ' is-invalid' : '' }}" name="jeniskelamin" value="male" {{ (old('jeniskelamin') == 'male') ? 'checked' : '' }} required>
                        <label> Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input id="jeniskelamin" style="border: 0px;width: 15px;margin-bottom: 0px;margin-right: 5px;height: 15px;" type="radio" class="form-control{{ $errors->has('jeniskelamin') ? ' is-invalid' : '' }}" name="jeniskelamin" value="female" {{ (old('jeniskelamin') == 'female') ? 'checked' : '' }} required>
                        <label> Female</label>
                    </div>

                    @if ($errors->has('jeniskelamin'))
                        <div>
                            <span>
                                <small class="text-danger" role="alert">
                                    <strong>{{ $errors->first('jeniskelamin') }}</strong>
                                </small>
                            </span>
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="pekerjaan" class="col-md-5 col-form-label text-md-left">{{ __('Type of Job') }}
                    <span style="color:red">*)</span>
                </label>

                <div class="col-md-7">
                    {{-- <input id="pekerjaan" type="text" class="form-control{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}" name="pekerjaan" value="{{ old('pekerjaan') }}" required autofocus> --}}
                    <select name="pekerjaan" style="font-size: 15px" class="form-control{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}" required>
                        <option hidden disabled selected value>--Select Job Type--</option>
                        <option value="Members of the TNI / National Police of the Republic of Indonesia">Members of the TNI / National Police of the Republic of Indonesia</option>
                        <option value="Official of the Legislative Institution / High Official / Manager">Official of the Legislative Institution / High Official / Manager</option>
                        <option value="Professional Staff">Professional Staff</option>
                        <option value="Professional Staff Technicians / Assistants">Professional Staff Technicians / Assistants</option>
                        <option value="Administrative Staff">Administrative Staff</option>
                        <option value="Service Personnel / Sales Force in Stores and Markets">Service Personnel / Sales Force in Stores and Markets</option>
                        <option value="Agriculture / Animal Husbandry Workforce">Agriculture / Animal Husbandry Workforce</option>
                        <option value="Processing / Craftsman">Processing / Craftsman</option>
                        <option value="Machine Operators and Assemblers">Machine Operators and Assemblers</option>
                        <option value="Blue-collar workers / Cleaning staff">Blue-collar workers / Cleaning staff</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Other">Other</option>
                    </select>

                    @if ($errors->has('pekerjaan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pekerjaan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="jumlahkeluarga" class="col-md-5 col-form-label text-md-left">{{ __('Number of Family Members') }}
                    <span style="color:red">*)</span>
                </label>

                <div class="col-md-7">
                    {{-- <input id="jumlahkeluarga" type="text" class="form-control{{ $errors->has('jumlahkeluarga') ? ' is-invalid' : '' }}" name="jumlahkeluarga" value="{{ old('jumlahkeluarga') }}" required autofocus> --}}
                    <select name="jumlahkeluarga" style="font-size: 15px" class="form-control{{ $errors->has('jumlahkeluarga') ? ' is-invalid' : '' }}" required>
                        <option hidden disabled selected value>--Choose Number of Family Members--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>

                    @if ($errors->has('jumlahkeluarga'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jumlahkeluarga') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group row">
                <label for="provinsi" class="col-md-5 col-form-label text-md-left">{{ __('Province') }}
                    <span style="color:red">*)</span>
                </label>

                <div class="col-md-7">
                    <select name="provinsi" style="font-size: 15px" class="form-control{{ $errors->has('provinsi') ? ' is-invalid' : '' }}" id="provinsi" required>
                        <option hidden disabled selected value>--Choose Province--</option>
                        @foreach($provinsis as $provinsi)
                        <option value="{{$provinsi->id}}" >
                            @if($provinsi->provinsi == 'ID-MA')
                            Maluku
                            @elseif($provinsi->provinsi == 'ID-PB')
                            Papua Barat
                            @elseif($provinsi->provinsi == 'Jakarta Raya')
                            DKI Jakarta
                            @else
                            {{$provinsi->provinsi}}
                            @endif
                        </option>
                        @endforeach
                    </select>
                    @if ($errors->has('provinsi'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('provinsi') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- <span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span> -->
            </div>

            <div class="form-group row">
                <label for="kota" class="col-md-5 col-form-label text-md-left">{{ __('Regency or City') }}
                    <span style="color:red">*)</span>
                </label>

                <div class="col-md-7">
                    <select name="kota" style="font-size: 15px" class="form-control{{ $errors->has('kota') ? ' is-invalid' : '' }}" id="kota" required>
                        <option hidden disabled selected value>--Choose Province First--</option>
                    </select>
                    @if ($errors->has('kota'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('kota') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            @foreach($forms as $key => $form)

                @if($key==0) <div class="form-group"><strong> <br><br>1. LIFE SATISFACTION </strong> <br></div>
                <div class="form-group"> <br> a. SUB DIMENSION OF LIFE SATISFACTION<br></div>
                @elseif($key==6) <div class="form-group"> <br> b. SUB DIMENSION OF SOCIAL LIFE SATISFACTION<br></div>
                @elseif($key==11) <div class="form-group"><strong> <br><br>2. AFFECTION</strong> <br></div>
                @elseif($key==14) <div class="form-group"><strong><br><br>3. MEANING OF LIFE </strong>(<I>Eudaimonia</I>) <br></div>
                @endif
            <div class="form-group row">
                <label for="soal{{$form->id}}" class="col-md-9 col-form-label text-md-left">{{ ++$key }}. {{ $form->soal }}
                    <span style="color:red">*)</span>
                </label>

                <div class="form-check form-check-inline">
                    <input id="soal{{$form->id}}" style="border: 0px;width: 15px;margin-bottom: 0px;margin-right: 5px;height: 15px;" type="radio"class=" form-control{{ $errors->has('soal'.$form->id) ? ' is-invalid' : '' }}" name="soal{{$form->id}}" value="1" {{ (old('soal'.$form->id) == 'yes') ? 'checked' : '' }} required>
                    <label> Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="soal{{$form->id}}" style="border: 0px;width: 15px;margin-bottom: 0px;margin-right: 5px;height: 15px;" type="radio" class="form-control{{ $errors->has('soal'.$form->id) ? ' is-invalid' : '' }}" name="soal{{$form->id}}" value="0" {{ (old('soal'.$form->id) == 'no') ? 'checked' : '' }} required>
                    <label> No</label>
                </div>

                @if ($errors->has('soal'.$form->id))
                    <div>
                        <span>
                            <small class="text-danger" role="alert">
                                <strong>{{ $errors->first('soal'.$form->id) }}</strong>
                            </small>
                        </span>
                    </div>
                @endif
<!--
                <div class="col-md-3">
                   <select name="soal{{$form->id}}" style="font-size: 15px" class="form-control{{ $errors->has('soal'.($form->id)) ? ' is-invalid' : '' }}" id="soal{{$form->id}}" required>
                    <option hidden disabled selected value>Choose</option>
                    <option value="1" >Yes</option>
                    <option value="0" >No</option>
                  </select>


                </div>
-->
            </div>
            @endforeach
            <br>
            <div class="form-group-row">
                <strong><span style="color:red;">*) </span>Required</strong>
            </div>
            <br>
            <br>
            <div class="form-group d-flex justify-content-center" style="margin-bottom: 50px">
              <div>
                 <a class="btn btn-lg btn-light" href="/" style="margin-right: 100px;">
                 {{ __('Cancel') }}
                 </a>
                 <button type="submit" class="btn btn-lg btn-success" style="margin-right: 1px">
                 <i class="fa fa-check">{{ __(' Test') }}</i>
                 </button>
              </div>
           </div>

            <br style="margin-bottom: 1px">
          </form>
        </div>
    </div>
</div>
<!-- </i> -->
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
    jQuery(function($){
       $("#nik").mask("0000 0000 0000 0000", {reverse: false});
       $("#jumlahkeluarga").mask("00", {reverse: false});
       $("#myForm").submit(function() {
          $("#nik").unmask();
          $("#jumlahkeluarga").unmask();
        });

    });
</script>
<script src="{{asset('js/jquery.js')}}"></script>
<script>
     $(document).ready(function() {

    $('select[name="provinsi"]').on('change', function(){
        var ProvID = $(this).val();
        if(ProvID == '35') {
            $.ajax({
                url: '/getKotas/'+ProvID,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('select[name="kota"]').append('<option hidden disabled selected value>--Please Wait--</option>');
                },
                success:function(data) {
                    // console.log(data);
                    $('select[name="kota"]').empty();
                    if(data == ''){
                        // console.log(data);
                        $('select[name="kota"]').append('<option hidden disabled selected value>No one Cities</option>');
                    }
                    else{
                    $.each(data, function(key, value){
                            $('select[name="kota"]').append('<option value="'+ key +'">' + value + '</option>');
                        });
                    }
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        }
        else if(ProvID != 35) {
            $.ajax({
                url: '/getKotas/'+ProvID,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('select[name="kota"]').append('<option hidden disabled selected value>--Please Wait--</option>');
                },
                success:function(data) {
                    // console.log(data);
                    $('select[name="kota"]').empty();
                    if(data == ''){
                        // console.log(data);
                        $('select[name="kota"]').append('<option hidden disabled selected value>No one Cities</option>');
                    }
                    else{
                    $('select[name="kota"]').append('<option hidden disabled selected value>--Choose Cities--</option>');
                    $.each(data, function(key, value){
                            $('select[name="kota"]').append('<option value="'+ key +'">' + value + '</option>');
                        });
                    }
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        }
        else {
            $('select[name="kota"]').empty();
        }

    });

});
 </script>
