<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricula_id')->constrained('matriculas')->onDelete('cascade');
            $table->foreignId('asignatura_id')->constrained('asignaturas')->onDelete('cascade');
            $table->decimal('p1', 5, 2)->default(0); // Primer parcial
            $table->decimal('p2', 5, 2)->default(0); // Segundo parcial
            $table->decimal('p3', 5, 2)->default(0); // Tercer parcial
            $table->decimal('final', 5, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('calificaciones');
    }
};

