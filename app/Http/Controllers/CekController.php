<?php

namespace App\Http\Controllers;

use App\Form;
use App\Skor;
use App\Provinsi;
use App\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CekController extends Controller
{
    // index Cek
    public function indexCek()
    {
    	$forms = Form::All();
    	$provinsis = Provinsi::All();
        $kotas = Kota::All();
      	return view('skor.index_skor', compact('forms', 'provinsis','kotas'));
    }

    // kota
    public function getKotas($id) {
        $kotas = Kota::Where('provinsi_id', $id)->pluck("kota","id");
        return json_encode($kotas);
    }

    // Cek
    public function Cek(Request $request)
    {
        $form = Form::pluck("id");
        if($request['nik'] != null){
        	$this->validate($request, [
        		'nama'				=> 'required|min:3|max:150',
        		'nik'				=> 'required|unique:skors|numeric|digits:16',
        		'jeniskelamin'		=> 'required|in:male,female',
        		'pekerjaan'			=> 'required|min:3|max:150',
        		'jumlahkeluarga'	=> 'required|numeric|min:1|max:12',

            ],[
            	'nama.required'=>'The Head Family Name field is required',
                'nama.min'=>'The Head Family Name must be at least 3 characters',
                'nama.max'=>'The Head Family Name may not be greater than 150 characters',
                
                'nik.required'=>'The NIK field is required',
                'nik.unique'=>'The NIK has already been taken.',
                'nik.numeric'=>'The NIK must be a number',
                'nik.digits'=>'The NIK must be 16 digits',

                'jeniskelamin.required'=>'The Gender field is required',

                'pekerjaan.required'=>'The Type of Job field is required',
                'pekerjaan.min'=>'The Type of Job must be at least 3 characters',
                'pekerjaan.max'=>'The Type of Job may not be greater than 150 characters',

                'jumlahkeluarga.required'=>'The Number of Family Members field is required',
                'jumlahkeluarga.numeric'=>'The Number of Family Members must be a number',
                'jumlahkeluarga.min'=>'The Number of Family Members must be 1',
                'jumlahkeluarga.max'=>'The Number of Family Members may not be greater than 12',
            ]);
        }else{
            $this->validate($request, [
                'nama'              => 'required|min:3|max:150',
                'jeniskelamin'      => 'required|in:male,female',
                'pekerjaan'         => 'required|min:3|max:150',
                'jumlahkeluarga'    => 'required|numeric|min:1|max:12',

            ],[
                'nama.required'=>'The Head Family Name field is required',
                'nama.min'=>'The Head Family Name must be at least 3 characters',
                'nama.max'=>'The Head Family Name may not be greater than 150 characters',

                'jeniskelamin.required'=>'The Gender field is required',

                'pekerjaan.required'=>'The Type of Job field is required',
                'pekerjaan.min'=>'The Type of Job must be at least 3 characters',
                'pekerjaan.max'=>'The Type of Job may not be greater than 150 characters',

                'jumlahkeluarga.required'=>'The Number of Family Members field is required',
                'jumlahkeluarga.numeric'=>'The Number of Family Members must be a number',
                'jumlahkeluarga.min'=>'The Number of Family Members must be 1',
                'jumlahkeluarga.max'=>'The Number of Family Members may not be greater than 12',
            ]);
        }

    	$forms = Form::count();    
    	// dd($forms);
    	$skor = 0;
    	for($i=1; $i<$forms+1; $i++) {
            if($request['soal'.$i] == '1'){
                $skor = $skor + 1;
            }
        }
        
        $skor = $skor/$forms;

        $provinsis = Provinsi::where('id', $request['provinsi'])->first();
        $kotas = Kota::where('id', $request['kota'])->first();
        
        $provinsis->update([
            'skor'        	=>	$provinsis->skor+$skor,
            'input'		  	=>	$provinsis->input+1,
        ]);
        $provinsis->update([
            'final_skor'        	=>	$provinsis->skor/$provinsis->input,
        ]);

        $kotas->update([
            'skor'          =>  $kotas->skor+$skor,
            'input'         =>  $kotas->input+1,
        ]);
        $kotas->update([
            'final_skor'            =>  $kotas->skor/$kotas->input,
        ]);

    	Skor::create([
            'provinsi_id'			=> $request['provinsi'],
            'kota_id'               => $request['kota'],
            'nama'					=> $request['nama'],
            'nik'					=> $request['nik'],
            'jeniskelamin'			=> $request['jeniskelamin'],
            'pekerjaan'				=> $request['pekerjaan'],
            'jumlahkeluarga'		=> $request['jumlahkeluarga'],
            'skor'					=> $skor,
        ]);



      	return redirect('/result')->with('msg', 'Family Happiness Test Success!');
    }

    // Result Cek
    public function ResultCek()
    {
    	$skors = Skor::orderBy('id', 'desc')->first();
    	$provinsis = Provinsi::All();
        $kotas = Kota::All();
      	return view('skor.result_skor', compact('skors', 'provinsis','kotas'));
    }
}
