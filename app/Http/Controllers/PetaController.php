<?php

namespace App\Http\Controllers;

use App\Skor;
use App\Provinsi;
use App\Kota;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
// use Khill\Lavacharts\Laravel\LavachartsFacade;
class PetaController extends Controller
{
    public function indexPeta()
    {
    	$lava=new Lavacharts;
    	// $bgColor = Lavacharts::BackgroundColor(['fill' => 'blue']);
    	$popularity=$lava->DataTable();
    	$data=Provinsi::select("provinsi as 0", "nama as 1", "final_skor as 2")->get()->toArray();
        $provinsis = Provinsi::orderBy('created_at', 'asc')->get();
        $popularity ->addStringColumn("provinsi")
                    ->addStringColumn("nama")
    				->addNumberColumn("Happiness Score")



                    // ->addColumn(array('string', 'provinsi', null))
                    // ->addColumn(array('number', 'Happiness Score', null))
                    // ->addColumn(array('string', 'Description', null))


    				->addRow(array('israel', 'israel', 0))
    				->addRow(array('germany', 'germany', 1))


                    // ->addRows([
                    //     ['israel', 0.0, 'ISRAEL'],
                    //     ['germany', 1.0, 'GERMANY']])


    				->addRows($data);

    	$lava->GeoChart("Popularity", $popularity, [

		    'region'                    => 'ID',
		    'backgroundColor'			=> '#81d4fa',
		    'resolution'                => 'provinces',
		    'datalessRegionColor'       => 'transparent',
		    'displayMode'               => 'regions',
		    'enableRegionInteractivity' => true,
		    'keepAspectRatio'           => true,
		    'colors'					=> ['#424242','#ffff00'],
		    // 'animation' 				=> ['startup' => true, 'easing' => 'Out','duration'=>1000],
		]);

        return view('peta.index_peta', compact('provinsis', 'lava'));
    }

    // index Skor
    public function indexData()
    {
        $skors = Skor::orderBy('created_at', 'asc')->get();
        return view('data.index_data', compact('skors'));
    }

    public function HapusData($id)
    {
        $skors = Skor::find($id);
        $provinsis = Provinsi::where('id', $skors->provinsi_id)->first();
        $kotas = Kota::where('id', $skors->kota_id)->first();
        $provinsis->update([
            'skor'          =>  $provinsis->skor-$skors->skor,
            'input'         =>  $provinsis->input-1,
        ]);
        $kotas->update([
            'skor'          =>  $kotas->skor-$skors->skor,
            'input'         =>  $kotas->input-1,
        ]);
        if($provinsis->input == 0){
            $provinsis->update(['final_skor'=>0]);
        }
        else{
            $provinsis->update([
                'final_skor'            =>  $provinsis->skor/$provinsis->input,
            ]);
        }
        if($kotas->input == 0){
            $kotas->update(['final_skor'=>0]);
        }
        else{
            $kotas->update([
                'final_skor'            =>  $kotas->skor/$kotas->input,
            ]);
        }
        $skors->delete();
        return back()->with('msg', 'Data successfully deleted!');
    }
}
