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
                'id_usuario' => 4,
                'titulo' => 'Recorriendo las Sierras de Córdoba',
                'contenido' => 'Una aventura increíble en las sierras de Córdoba. Eso si, descansen antes de hacer las caminatas',
                'provincia' => 'Córdoba',
                'imagen' => 'imagenes/posteos/cordoba_sierra.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 4,
                'titulo' => 'Descubriendo Buenos Aires',
                'contenido' => 'Buenos Aires querida, siempre te llevaré conmigo jaja',
                'provincia' => 'Buenos Aires',
                'imagen' => 'imagenes/posteos/buenos_aires.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Aventura en San Juan',
                'contenido' => 'Hermoso poder vivir este viaje, explorando lugares únicos. QUE HERMOSO PAIS!!',
                'provincia' => 'San Juan',
                'imagen' => 'imagenes/posteos/san_juan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 8,
                'titulo' => 'En el patio de casa',
                'contenido' => 'Otro añito más, otro viaje más a SALTA señores!!',
                'provincia' => 'Salta',
                'imagen' => 'imagenes/posteos/salta_cultura.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Quiero quedarme a vivir',
                'contenido' => 'Ushuaia, locura de viaje, recomiendo mucho...',
                'provincia' => 'Tierra del Fuego',
                'imagen' => 'imagenes/posteos/tierra_del_fuego.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 6,
                'titulo' => 'Sueño cumplido',
                'contenido' => 'Mira que fotón! Otro sueño cumplido, nunca es tarde para empezar a viajar',
                'provincia' => 'Mendoza',
                'imagen' => 'imagenes/posteos/mendoza_nieve.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 6,
                'titulo' => 'La Patagonia en Neuquén',
                'contenido' => 'Disfrutando de los paisajes patagónicos, montañas ¡¡por doquier!!.',
                'provincia' => 'Neuquén',
                'imagen' => 'imagenes/posteos/neuquen_patagonia.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 7,
                'titulo' => 'Historia y Tradición en Jujuy',
                'contenido' => 'No me alcanza el día para contarles las tradiciones de estas bellas tierras je!',
                'provincia' => 'Jujuy',
                'imagen' => 'imagenes/posteos/jujuy_historia.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 5,
                'titulo' => 'Biciclete-ando en la pampa',
                'contenido' => 'Para no perder la costumbre y bajar la rica comida que probé.',
                'provincia' => 'La Pampa',
                'imagen' => 'imagenes/posteos/la_pampa_bicicleta.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Amigo bajate de ahí',
                'contenido' => 'Aca el santi se quiso subir para sacarse una foto, estas igual hermano jaja te quiero loco',
                'provincia' => 'San Luis',
                'imagen' => 'imagenes/posteos/san_luis_aventura.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 7,
                'titulo' => 'Empapados pero anonadados',
                'contenido' => 'Recorrido por las maravillas naturales, lleven toalla!!',
                'provincia' => 'Misiones',
                'imagen' => 'imagenes/posteos/cataratas.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 6,
                'titulo' => 'La mejor hinchada lejos',
                'contenido' => 'Otro clásico más, y los hijos siguen esperando',
                'provincia' => 'Buenos Aires',
                'imagen' => 'imagenes/posteos/cancha_futbol.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 4,
                'titulo' => 'Siempre con vos!',
                'contenido' => 'Hermoso que sigamos viviendo aventuras únicas, de los 14 para siempre amigui',
                'provincia' => 'Tucumán',
                'imagen' => 'imagenes/posteos/tucuman.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
