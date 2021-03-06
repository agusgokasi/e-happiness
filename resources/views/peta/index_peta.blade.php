@extends('layouts.app_guest')

@section('content')

<br><br><br>

<div class="container-fluid">
	<h2 class="text-center">Family Happiness Distribution Map of <br>Indonesia</h2>

	<div id="provinsis" style="width:100%; margin:0 auto">
    <?=$lava->render("GeoChart","Popularity","provinsis");?>
    {{-- <div class="lds-ring"></div> --}}
	</div>

</div>


@endsection
