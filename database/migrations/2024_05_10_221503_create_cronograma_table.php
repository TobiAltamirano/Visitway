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
        Schema::create('cronograma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_actividad');
            $table->unsignedBigInteger('id_usuario');
            $table->string('dia_semana');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->timestamps();

            $table->foreign('id_actividad')->references('id_actividad')->on('actividades');
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cronograma');
    }
};
