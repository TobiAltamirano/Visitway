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
                'nombre_tipo_gastronomia' => 'Autóctono',
                'imagen_tipo_gastronomia' => 'gastronomia_autoctono.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 2,
                'nombre_tipo_gastronomia' => 'Mexicano',
                'imagen_tipo_gastronomia' => 'gastronomia_mexicano.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 3,
                'nombre_tipo_gastronomia' => 'Japonés',
                'imagen_tipo_gastronomia' => 'gastronomia_japones.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 4,
                'nombre_tipo_gastronomia' => 'Parrillas',
                'imagen_tipo_gastronomia' => 'gastronomia_parrillas.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 5,
                'nombre_tipo_gastronomia' => 'Pizzería',
                'imagen_tipo_gastronomia' => 'gastronomia_pizzeria.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 6,
                'nombre_tipo_gastronomia' => 'Árabe',
                'imagen_tipo_gastronomia' => 'gastronomia_arabe.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 7,
                'nombre_tipo_gastronomia' => 'Oriental',
                'imagen_tipo_gastronomia' => 'gastronomia_oriental.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 8,
                'nombre_tipo_gastronomia' => 'Italiana',
                'imagen_tipo_gastronomia' => 'gastronomia_italiana.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo_gastronomia' => 9,
                'nombre_tipo_gastronomia' => 'Armenia',
                'imagen_tipo_gastronomia' => 'gastronomia_armenia.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
