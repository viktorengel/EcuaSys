<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $table = 'periodos';

    protected $fillable = [
        'nombre',           // Ej: "Periodo 2025-2026"
        'fecha_inicio',     // Ej: "2025-05-01"
        'fecha_fin',        // Ej: "2026-02-28"
        'estado',           // Ej: "activo" o "inactivo"
    ];

    // Relación: Un periodo puede tener muchas matrículas
    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
