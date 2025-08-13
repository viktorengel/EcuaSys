<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Estudiante;
use App\Models\Asignatura;
use App\Models\Periodo;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function index()
    {
        $calificaciones = Calificacion::with(['estudiante', 'asignatura', 'periodo'])->get();
        return view('calificaciones.index', compact('calificaciones'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        $asignaturas = Asignatura::all();
        $periodos = Periodo::all();
        return view('calificaciones.create', compact('estudiantes', 'asignaturas', 'periodos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'periodo_id' => 'required|exists:periodos,id',
            'nota' => 'required|numeric|min:0|max:10',
        ]);

        Calificacion::create($request->all());
        return redirect()->route('calificaciones.index')->with('success', 'Calificación registrada correctamente.');
    }

    public function show(Calificacion $calificacion)
    {
        return view('calificaciones.show', compact('calificacion'));
    }

    public function edit(Calificacion $calificacion)
    {
        $estudiantes = Estudiante::all();
        $asignaturas = Asignatura::all();
        $periodos = Periodo::all();
        return view('calificaciones.edit', compact('calificacion', 'estudiantes', 'asignaturas', 'periodos'));
    }

    public function update(Request $request, Calificacion $calificacion)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'periodo_id' => 'required|exists:periodos,id',
            'nota' => 'required|numeric|min:0|max:10',
        ]);

        $calificacion->update($request->all());
        return redirect()->route('calificaciones.index')->with('success', 'Calificación actualizada correctamente.');
    }

    public function destroy(Calificacion $calificacion)
    {
        $calificacion->delete();
        return redirect()->route('calificaciones.index')->with('success', 'Calificación eliminada correctamente.');
    }
}
