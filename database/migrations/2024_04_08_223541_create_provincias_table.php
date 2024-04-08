<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Corremos la migración de provincias.
     */
    public function up(): void
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->id('id_provincia');
            $table->string('nombre_provincia');
            $table->string('imagen_provincia');
            $table->text('descripcion_provincia');
            $table->text('ubicacion_provincia');
            $table->string('imagen_ubicacion_provincia');
            $table->text('cultura_caracteristicas_provincia');
            $table->text('flora_fauna_provincia');
            $table->text('historia_provincia');
            $table->text('region_provincia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provincias');
    }
};
