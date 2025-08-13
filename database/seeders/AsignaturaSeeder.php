<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asignatura;

class AsignaturaSeeder extends Seeder
{
    public function run(): void
    {
        Asignatura::create(['nombre' => 'Matemáticas', 'docente_id' => 1]);
        Asignatura::create(['nombre' => 'Lengua y Literatura', 'docente_id' => 2]);
        Asignatura::create(['nombre' => 'Sistemas Operativos', 'docente_id' => 1]);
    }
}
