<?php

namespace App\Http\Controllers;

use Auth;

use App\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    //
    public function indexKota()
    {
    	$users = Auth::user();
        $kotas = kota::orderBy('updated_at', 'desc')->get();
      	return view('kota.index_kota', compact('kotas'));
    }

    // modal kota
    public function modalKota(Request $request)
    {
        $this->validate($request,[
        'kota'              => 'required|min:3|max:150',
        ],[
            'kota.required'=>'Category field is required',
            'kota.min'=>'Category must be at least 3 characters',
            'kota.max'=>'Category may not be greater than 150 characters',
        ]
    );


        $kotas = kota::create([
                    'kota'                => $request['kota'],
        ]);

        return back()->with('msg', 'Data successfully created!');
    }

    // modal Edit kota
    public function modalEditKota(Request $request, $id)
    {
        $this->validate($request,[
        'kota'              => 'required|min:3|max:150',
        ],[
            'kota.required'=>'Category field is required',
            'kota.min'=>'Category must be at least 3 characters',
            'kota.max'=>'Category may not be greater than 150 characters',
        ]
    );

        $kotas = kota::find($id);
        $kotas->update([
                    'kota'                => $request['kota'],
        ]);

        return back()->with('msg', 'Data successfully edited!');
    }

    public function HapusKota($id){
        $kotas = kota::find($id);
        $kotas->delete();
        return back()->with('msg', 'Data successfully deleted!');
    }
}
