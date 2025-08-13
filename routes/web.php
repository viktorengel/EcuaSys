<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('estudiantes', EstudianteController::class);
Route::resource('cursos', CursoController::class);
Route::resource('matriculas', MatriculaController::class);
Route::resource('calificaciones', CalificacionController::class);
Route::resource('periodos', PeriodoController::class);
Route::resource('asignaturas', AsignaturaController::class);
Route::resource('docentes', DocenteController::class);
