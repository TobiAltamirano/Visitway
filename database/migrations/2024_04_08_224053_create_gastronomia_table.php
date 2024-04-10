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
        Schema::create('gastronomia', function (Blueprint $table) {
            $table->id('id_local_gastronomico');
            $table->string('nombre_local_gastronomico');
            $table->string('imagen_local_gastronomico');
            $table->text('horarios_local_gastronomico');
            $table->text('ubicacion_local_gastronomico');
            $table->text('contacto_local_gastronomico');
            $table->text('url_sitio_web_local_gastronomico');
            $table->boolean('tiene_descuentos_ofertas');
            $table->boolean('tiene_wifi');
            $table->boolean('tiene_estacionamiento');
            $table->boolean('acepta_mascotas');
            $table->boolean('acepta_debito');
            $table->boolean('acepta_credito');
            $table->boolean('acepta_medios_digitales');
            $table->boolean('apto_vegetarianos');
            $table->boolean('apto_veganos');
            $table->boolean('apto_sin_tacc');
            $table->boolean('apto_intolerantes_lactosa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastronomia');
    }
};