<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Provinsi;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Illuminate\Support\Facades\DB;
use App\Support\Authorization\AuthorizationUserTrait;

class ProvController extends Controller
{

    // index Provinsi
    public function indexProv()
    {
    	$users = Auth::user();
        $provinsis = Provinsi::orderBy('updated_at', 'desc')->get();
      	return view('provinsi.index_provinsi', compact('provinsis'));
    }

    // modal Provinsi
    public function modalProv(Request $request)
    {
        $this->validate($request,[
        'provinsi'              => 'required|min:3|max:150',
        ],[
            'provinsi.required'=>'Category field is required',
            'provinsi.min'=>'Category must be at least 3 characters',
            'provinsi.max'=>'Category may not be greater than 150 characters',
        ]
    );


        $Provinsis = Provinsi::create([
                    'provinsi'                => $request['provinsi'],
        ]);

        return back()->with('msg', 'Data successfully created!');
    }

    // modal Edit Provinsi
    public function modalEditProv(Request $request, $id)
    {
        $this->validate($request,[
        'provinsi'              => 'required|min:3|max:150',
        ],[
            'provinsi.required'=>'Category field is required',
            'provinsi.min'=>'Category must be at least 3 characters',
            'provinsi.max'=>'Category may not be greater than 150 characters',
        ]
    );

        $Provinsis = Provinsi::find($id);
        $Provinsis->update([
                    'provinsi'                => $request['provinsi'],
        ]);

        return back()->with('msg', 'Data successfully edited!');
    }

    public function HapusProv($id){
        $Provinsis = Provinsi::find($id);
        $Provinsis->delete();
        return back()->with('msg', 'Data successfully deleted!');
    }
}
