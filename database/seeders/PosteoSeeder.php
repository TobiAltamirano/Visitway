<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posteos')->insert([
            [
                'id_usuario' => 1, // ID del usuario que creó el post
                'titulo' => 'Mi experiencia en Mendoza',
                'contenido' => 'Este es un post de ejemplo sobre mi experiencia en la provincia de Mendoza.',
                'provincia' => 'Mendoza',
                'imagen1' => 'mendoza_imagen1.jpg', // Ruta de la primera imagen
                'imagen2' => 'mendoza_imagen2.jpg', // Ruta de la segunda imagen
                'imagen3' => 'mendoza_imagen3.jpg', // Ruta de la tercera imagen
                'created_at' => now(),
                'updated_at' => now(),

            ]
        ]);
    }
}
