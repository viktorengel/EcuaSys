<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asistencia;

class AsistenciaSeeder extends Seeder
{
    public function run(): void
    {
        Asistencia::create(['matricula_id' => 1, 'fecha' => '2025-05-10', 'asistio' => true]);
        Asistencia::create(['matricula_id' => 2, 'fecha' => '2025-05-10', 'asistio' => false]);
    }
}
