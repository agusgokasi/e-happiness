@extends('layouts.app_guest')

@section('content')
<br><br><br>
<div class="container-fluid">
	<h2 class="text-center">Family Happiness Distribution Map of <br>Cities in Indonesia</h2>

	<div id="kotas" style="width:100%; margin:0 auto">
	<?=$lava->render("GeoChart","Popularity","kotas");?>
	</div>

</div>
@endsection
