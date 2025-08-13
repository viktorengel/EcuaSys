<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calificacion;

class CalificacionSeeder extends Seeder
{
    public function run(): void
    {
        Calificacion::create(['matricula_id' => 1, 'asignatura_id' => 1, 'p1' => 8.5, 'p2' => 9, 'p3' => 8.7, 'final' => 8.73]);
        Calificacion::create(['matricula_id' => 1, 'asignatura_id' => 2, 'p1' => 7.9, 'p2' => 8.1, 'p3' => 8.0, 'final' => 8.0]);
    }
}
