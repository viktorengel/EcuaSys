<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $table = 'asistencias';

    protected $fillable = [
        'matricula_id',
        'fecha',
        'estado' // presente, ausente, atrasado
    ];

    public function matricula()
    {
        return $this->belongsTo(Matricula::class);
    }
}
