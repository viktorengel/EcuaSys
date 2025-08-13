<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    public function run(): void
    {
        Estudiante::create([
            'cedula' => '0303030303',
            'nombres' => 'Juan',
            'apellidos' => 'Pérez López',
            'fecha_nacimiento' => '2007-05-14',
            'direccion' => 'Av. Principal 123',
            'telefono' => '0981112233'
        ]);

        Estudiante::create([
            'cedula' => '0404040404',
            'nombres' => 'Ana',
            'apellidos' => 'Mendoza Ortiz',
            'fecha_nacimiento' => '2006-10-21',
            'direccion' => 'Calle Secundaria 456',
            'telefono' => '0975556677'
        ]);
    }
}
