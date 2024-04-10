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
        Schema::table('gastronomia', function (Blueprint $table) {
            $table->foreignId('tipo_gastronomia_id');

            // Foreing key
            $table->foreign('tipo_gastronomia_id')->references('id_tipo_gastronomia')->on('tipos_gastronomia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gastronomia', function (Blueprint $table) {
            $table->dropForeign(['tipo_gastronomia_id']);
            $table->dropColumn('tipo_gastronomia_id');
        });
    }
};