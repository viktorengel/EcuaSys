<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('periodos')->insert([
            [
                'nombre' => 'Año Lectivo 2025-2026',
                'fecha_inicio' => '2025-05-01',
                'fecha_fin' => '2026-02-15',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Año Lectivo 2024-2025',
                'fecha_inicio' => '2024-05-01',
                'fecha_fin' => '2025-02-15',
                'estado' => 'inactivo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
