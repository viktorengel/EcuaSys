<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    public function run(): void
    {
        Docente::create([
            'cedula' => '0101010101',
            'nombres' => 'María',
            'apellidos' => 'García López',
            'email' => 'maria@example.com',
            'telefono' => '0987654321'
        ]);

        Docente::create([
            'cedula' => '0202020202',
            'nombres' => 'Carlos',
            'apellidos' => 'Andrade Torres',
            'email' => 'carlos@example.com',
            'telefono' => '0998877665'
        ]);
    }
}
