<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 10)->unique();
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->date('fecha_nacimiento');
            $table->string('direccion')->nullable();
            $table->string('telefono', 15)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('estudiantes');
    }
};

