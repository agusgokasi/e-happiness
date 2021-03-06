<?php

namespace App\Http\Controllers;

use App\Skor;
use App\Kota;
use App\Provinsi;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class Peta2Controller extends Controller
{
    public function indexPeta2()
    {
    	$lava=new Lavacharts;
    	// $bgColor = Lavacharts::BackgroundColor(['fill' => 'blue']);
    	$popularity=$lava->DataTable();
    	$data=Kota::select("latitude as 0", "longitude as 1", "kota as 2", "final_skor as 3")->get()->toArray();
        // dd($data);
        $kotas = Kota::orderBy('created_at', 'asc')->get();
        $popularity ->addColumn(array('number', 'latitude', null))
                    ->addColumn(array('number', 'longitude', null))
                    ->addColumn(array('string', 'kota', null))
                    ->addColumn(array('number', 'Happiness Score', null))
                    ->addRows([
                        [200, 1, 'qweiu', 0.0],
                        [200, 2, 'asdfa', 1.0]])
                    ->addRows($data);

    	$lava->GeoChart("Popularity", $popularity, [

		    'region'                    => 'ID',
            // 'legend'                    => 'none',
		    'backgroundColor'			=> '#81d4fa',
            'defaultColor'              => '#f5f5f5',
		    'resolution'                => 'provinces',
		    'datalessRegionColor'       => 'green',
		    'displayMode'               => 'markers',
		    'enableRegionInteractivity' => true,
		    'keepAspectRatio'           => true,
		    'colorAxis'                 => ['colors'=> ['yellow', 'red']],
		    //'animation' 				=> ['startup' => true, 'easing' => 'inAndOut'],
            'tooltip'                   => '#444444',
            'markerOpacity'             => '1.0',

		]);

        return view('peta.index_peta_kota', compact('kotas', 'lava'));
    }

    // index Skor
    public function indexData()
    {
        $skors = Skor::orderBy('created_at', 'asc')->get();
        return view('data.index_data', compact('skors'));
    }

    public function HapusData($id){
        $skors = Skor::find($id);
        $provinsis = Provinsi::where('id', $skors->provinsi_id)->first();
        $provinsis->update([
            'skor'          =>  $provinsis->skor-$skors->skor,
            'input'         =>  $provinsis->input-1,
        ]);
        if($provinsis->input == 0){
            $provinsis->update(['final_skor'=>0]);
        }
        else{
            $provinsis->update([
                'final_skor'            =>  $provinsis->skor/$provinsis->input,
            ]);
        }
        $skors->delete();
        return back()->with('msg', 'Data successfully deleted!');
    }
}
