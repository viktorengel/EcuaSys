<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        Curso::create(['nombre' => '1ro Bachillerato', 'paralelo' => 'A', 'anio_lectivo' => 2025]);
        Curso::create(['nombre' => '1ro Bachillerato', 'paralelo' => 'B', 'anio_lectivo' => 2025]);
        Curso::create(['nombre' => '2do Bachillerato', 'paralelo' => 'A', 'anio_lectivo' => 2025]);
    }
}
