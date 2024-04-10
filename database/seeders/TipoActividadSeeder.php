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
                'nombre_tipo_actividad' => 'Diurna',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_actividad' => 2,
                'nombre_tipo_actividad' => 'Tour',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_actividad' => 3,
                'nombre_tipo_actividad' => 'Museo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
