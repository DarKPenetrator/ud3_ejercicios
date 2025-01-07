<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id(); // ID de la nota
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade'); // Relación con alumnos
            $table->foreignId('asignatura_id')->constrained('asignaturas')->onDelete('cascade'); // Relación con asignaturas
            $table->decimal('nota', 5, 2); // Nota con 2 decimales
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
