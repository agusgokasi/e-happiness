@extends('layouts.app_guest')

@section('content')
<!-- <i class="fas fa-spin"> -->
<br><br><br><br>
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="card">
      <div class="card-header text-center">{{ __("Your Family's Happiness Test Result") }}</div>
      <div class="card-body">
        @if($skors->skor < 0.30)
        <p class="grey-text text-center">
        <b>Your Family Is Not Happy</b> <br> <br>
        <img src="{{ asset('images/sad.png') }}" width=35% heigth=35% alt=""></div>
        </p>
        @else
        <p class="grey-text text-center">
        <b>Your Family Is Happy</b> <br> <br>
        <img src="{{ asset('images/happy.png') }}" width=35% heigth=35% alt=""></div>
        </p>
        @endif
        </div>
</div>
<br> <br>
<div class="container">

  <div class="row d-flex justify-content-center"> 

<div class="card">
        <div class="card-body">
        <div class="card-header text-center">
        Your <b>E-happpiness</b> Score : {{$skors->skor}} Out of 1

        </div>
        </div>
        </div>
  </div>
</div>
@endsection