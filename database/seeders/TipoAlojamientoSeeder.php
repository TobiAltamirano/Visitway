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
                'nombre_tipo_alojamiento' => 'Hotel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_alojamiento' => 2,
                'nombre_tipo_alojamiento' => 'Camping',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
