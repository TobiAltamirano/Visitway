<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoAlojamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_alojamientos')->insert([
            [
                'id_tipo_alojamiento' => 1,
                'nombre_tipo_alojamiento' => 'Hoteles',
                'imagen_tipo_alojamiento' => 'alojamiento_hoteles.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_alojamiento' => 2,
                'nombre_tipo_alojamiento' => 'Campings',
                'imagen_tipo_alojamiento' => 'alojamiento_campings.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_alojamiento' => 3,
                'nombre_tipo_alojamiento' => 'Cabañas',
                'imagen_tipo_alojamiento' => 'alojamiento_cabañas.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_tipo_alojamiento' => 4,
                'nombre_tipo_alojamiento' => 'Hostels',
                'imagen_tipo_alojamiento' => 'alojamiento_hosteles.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
