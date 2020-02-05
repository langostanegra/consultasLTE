<?php

namespace App\Imports;

use App\BibliotecaCredencial;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportarUsuarios implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BibliotecaCredencial([
            'cedula' => $row[0],
            'nombre' => $row[1],
            'correo_institucional' => $row[2],
            'usuario_medellin' => $row[3],
            'password_medellin' => $row[4],
            'estado' => $row[5],
        ]);
    }
}
