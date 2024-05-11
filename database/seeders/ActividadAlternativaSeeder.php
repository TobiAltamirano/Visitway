<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadAlternativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actividades_alternativas')->insert([
            [
                'id_usuario' => 1,
                'titulo' => 'Feria Artesanal',
                'descripcion' => 'Una feria de artesanías con productos locales.',
                'provincia' => 'Mendoza',
                'localidad' => 'San Rafael',
                'direccion' => 'Calle Principal',
                'horarios' => 'Todos los sábados de 10:00 a 18:00',
                'costo' => 0,
                'imagen1' => 'feria_imagen1.jpg',
                'imagen2' => 'feria_imagen2.jpg',
                'imagen3' => 'feria_imagen3.jpg',
            ],
            [
                'id_usuario' => 1,
                'titulo' => 'Taller de Fotografía',
                'descripcion' => 'Un taller donde aprenderás técnicas de fotografía.',
                'provincia' => 'Buenos Aires',
                'localidad' => 'La Plata',
                'direccion' => 'Avenida Libertador 123',
                'horarios' => 'Martes y jueves de 18:00 a 20:00',
                'costo' => 500,
                'imagen1' => 'taller_imagen1.jpg',
                'imagen2' => 'taller_imagen2.jpg',
                'imagen3' => 'taller_imagen3.jpg',
            ],
        ]);
    }
}
