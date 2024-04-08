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
        Schema::create('alojamientos', function (Blueprint $table) {
            $table->id('id_alojamiento');
            $table->string('tipo_alojamiento')->nullable();
            $table->string('nombre_alojamiento');
            $table->string('imagen_alojamiento');
            $table->unsignedInteger('precio_alojamiento');
            $table->text('horarios_alojamiento');
            $table->text('ubicacion_alojamiento');
            $table->text('contacto_alojamiento');
            $table->text('url_sitio_web_alojamiento');
            $table->boolean('tiene_descuentos_ofertas');
            $table->boolean('tiene_wifi');
            $table->boolean('tiene_estacionamiento');
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
        Schema::dropIfExists('alojamientos');
    }
};
