<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('criminals', function (Blueprint $table) {
            $table->id();
            $table->String('Nombre');
            $table->String('Apellidos');
            $table->String('DNI');
            $table->double('Altura');
            $table->double('Peso');
            $table->integer('Edad');
            $table->String('Crimen');
            $table->String('Estado');
            $table->double('Recompensa');
            $table->String('Foto');
            $table->String('Descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criminals');
    }
};
