<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_actividades')->insert([
            [
                'id_tipo_actividad' => 1,
                'nombre_tipo_actividad' => 'Diurnas',
                'imagen_tipo_actividad' => 'actividad_diurnas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_actividad' => 2,
                'nombre_tipo_actividad' => 'Tours',
                'imagen_tipo_actividad' => 'actividad_tours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_actividad' => 3,
                'nombre_tipo_actividad' => 'Museos',
                'imagen_tipo_actividad' => 'actividad_museos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_actividad' => 4,
                'nombre_tipo_actividad' => 'Nocturnas',
                'imagen_tipo_actividad' => 'actividad_nocturnas',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
