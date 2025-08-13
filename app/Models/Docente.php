<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'especialidad'
    ];

    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class);
    }
}
