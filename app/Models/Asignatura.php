<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'curso_id',
        'docente_id'
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }

    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class);
    }
}
