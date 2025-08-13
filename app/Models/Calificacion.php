<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;

    protected $table = 'calificaciones';

    protected $fillable = [
        'matricula_id',
        'asignatura_id',
        'trimestre1',
        'trimestre2',
        'trimestre3',
        'promedio_final'
    ];

    public function matricula()
    {
        return $this->belongsTo(Matricula::class);
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
