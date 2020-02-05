<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
//Para importar los usuarios por medio de excel
use App\Imports\ImportarUsuarios;

class ImportarUsuariosController extends Controller
{
    public function index(){
        return view('ImportarUsuarios.index');
    }

    public function importar_usuarios(Request $request){        
        $file = $request->file('file');     
        $nombre_archivo = $request->input('nombre_archivo'); 
        $nombre_archivo_arreglo = str_split($nombre_archivo);
        
        $posicion = 0;        
        for ($i=0;$i<(count($nombre_archivo_arreglo));$i++){
            if ($nombre_archivo_arreglo[$i] == ".") {
                $posicion = $i;
            }            
        }
        
        $nuevo_tamanio_arreglo = ((count($nombre_archivo_arreglo)) - $posicion)-1;

        for ($i=0;$i<$nuevo_tamanio_arreglo;$i++) {
            $arreglo_extension[$i] = $nombre_archivo_arreglo[$posicion+1];
            $posicion++;
        }

        $arreglo_extension_string = implode($arreglo_extension);

        if ($arreglo_extension_string == "XLSX" OR $arreglo_extension_string == "xlsx" OR $arreglo_extension_string == "XLS" OR $arreglo_extension_string == "xls" OR $arreglo_extension_string == "CSV" OR $arreglo_extension_string == "csv") {
            Excel::import(new ImportarUsuarios, $file);
            return back()->with('mensaje','Usuarios Importados con éxito');
        }else{
            return back()->with('mensaje','Formato de archivo no compatible');
        }            
    }
}
