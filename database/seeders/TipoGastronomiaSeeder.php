<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoGastronomiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_gastronomia')->insert([
            [
                'id_tipo_gastronomia' => 1,
                'nombre_tipo_gastronomia' => 'Autoctono',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 2,
                'nombre_tipo_gastronomia' => 'Mexicano',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 3,
                'nombre_tipo_gastronomia' => 'Japones',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
