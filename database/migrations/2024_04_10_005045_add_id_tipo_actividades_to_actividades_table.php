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
        Schema::table('actividades', function (Blueprint $table) {
            $table->foreignId('tipo_actividad_id');

            // Foreing key
            $table->foreign('tipo_actividad_id')->references('id_tipo_actividad')->on('tipos_actividades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('actividades', function (Blueprint $table) {
            $table->dropForeign(['tipo_actividad_id']);
            $table->dropColumn('tipo_actividad_id');
        });
    }
};