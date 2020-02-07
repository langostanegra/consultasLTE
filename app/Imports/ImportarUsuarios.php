<?php

namespace App\Imports;

use App\BibliotecaCredencial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Validation\Rule;

class ImportarUsuarios implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new BibliotecaCredencial([
            'cedula' => $row['cedula'],
            'nombre' => $row['nombre'],
            'correo_institucional' => $row['correo_institucional'],
            'usuario_medellin' => $row['usuario_medellin'],
            'password_medellin' => $row['password_medellin'],
            'estado' => $row['estado'],
        ]);
    }

    public function rules(): array
    {
        return [
            // Siempre valida por lotes
            // Fila.columna
            '0.0' => 'in:cedula',
            '0.1' => 'in:nombre',
            '0.2' => 'in:correo_institucional',
            '0.3' => 'in:usuario_medellin',
            '0.4' => 'in:password_medellin',
            '0.5' => 'in:estado',
        ];
    }
}
