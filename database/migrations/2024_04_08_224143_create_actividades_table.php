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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id('id_actividad');
            $table->string('nombre_actividad');
            $table->string('imagen_actividad');
            $table->text('descripcion_actividad');
            $table->unsignedInteger('precio_actividad');
            $table->text('horarios_actividad');
            $table->text('ubicacion_actividad');
            $table->text('contacto_actividad');
            $table->text('url_sitio_web_actividad');
            $table->unsignedInteger('duracion_actividad');
            $table->boolean('tiene_descuentos_ofertas');
            $table->boolean('es_accesible');
            $table->boolean('es_gratis');
            $table->boolean('acepta_mascotas');
            $table->boolean('acepta_debito');
            $table->boolean('acepta_credito');
            $table->boolean('acepta_medios_digitales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};