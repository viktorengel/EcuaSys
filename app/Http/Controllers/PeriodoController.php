<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public function index()
    {
        $periodos = Periodo::all();
        return view('periodos.index', compact('periodos'));
    }

    public function create()
    {
        return view('periodos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        Periodo::create($request->all());
        return redirect()->route('periodos.index')->with('success', 'Periodo creado correctamente.');
    }

    public function show(Periodo $periodo)
    {
        return view('periodos.show', compact('periodo'));
    }

    public function edit(Periodo $periodo)
    {
        return view('periodos.edit', compact('periodo'));
    }

    public function update(Request $request, Periodo $periodo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        $periodo->update($request->all());
        return redirect()->route('periodos.index')->with('success', 'Periodo actualizado correctamente.');
    }

    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('periodos.index')->with('success', 'Periodo eliminado correctamente.');
    }
}
