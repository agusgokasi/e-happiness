<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Support\Authorization\AuthorizationUserTrait;

class FormController extends Controller
{
    public function welcome()
    {
      return view('welcome');
    }

    // index Form
    public function indexForm()
    {
    	$users = Auth::user();
        $forms = Form::orderBy('created_at', 'asc')->get();
      	return view('form.index_indikator', compact('forms'));
    }

    // modal Indikator
    public function modalIndikator(Request $request)
    {
        $this->validate($request,[
        'soal'              => 'required|min:3|max:150',
        ],[
            'soal.required'=>'Category field is required',
            'soal.min'=>'Category must be at least 3 characters',
            'soal.max'=>'Category may not be greater than 150 characters',
        ]
    );


        $forms = Form::create([
                    'soal'                => $request['soal'],
        ]);

        return back()->with('msg', 'Data successfully created!');
    }

    // modal Edit Indikator
    public function modalEditIndikator(Request $request, $id)
    {
        $this->validate($request,[
        'soal'              => 'required|min:3|max:150',
        ],[
            'soal.required'=>'Category field is required',
            'soal.min'=>'Category must be at least 3 characters',
            'soal.max'=>'Category may not be greater than 150 characters',
        ]
    );

        $forms = Form::find($id);
        $forms->update([
                    'soal'                => $request['soal'],
        ]);

        return back()->with('msg', 'Data successfully edited!');
    }

    public function HapusIndikator($id){
        $forms = Form::find($id);
        $forms->delete();
        return back()->with('msg', 'Data successfully deleted!');
    }
}
