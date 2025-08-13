<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;

class MatriculaSeeder extends Seeder
{
    public function run(): void
    {
        Matricula::create(['estudiante_id' => 1, 'curso_id' => 1, 'periodo_id' => 1, 'anio_lectivo' => 2025]);
        Matricula::create(['estudiante_id' => 2, 'curso_id' => 2, 'periodo_id' => 1, 'anio_lectivo' => 2025]);
    }
}
