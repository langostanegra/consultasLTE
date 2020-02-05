<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
//Para importar los usuarios por medio de excel
use App\Imports\ImportarUsuarios;
Use Validator;

class ImportarUsuariosController extends Controller
{
    public function index(){
        return view('ImportarUsuarios.index');
    }

    public function importar_usuarios(Request $request){ 
                 
        $validador = Validator::make($request->all(),[
            'file' => 'required|max:5000|mimes:xlsx,xls,csv'
        ]);

        if($validador->passes()){
            $file = $request->file('file');
            Excel::import(new ImportarUsuarios, $file);
            return redirect()->back()->with(['succes'=>"Usuarios importados de forma correcta"]);
        }else{
            return redirect()->back()->with(['errors'=>$validador->errors()->all()]);
        }
    }
}
