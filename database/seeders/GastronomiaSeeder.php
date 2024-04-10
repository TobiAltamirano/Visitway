<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GastronomiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gastronomia')->insert([
            [
                'id_local_gastronomico' => 1,
                'provincia_id' => 1,
                'tipo_gastronomia_id' => 1,
                'nombre_local_gastronomico' => 'Anna Bistró',
                'imagen_local_gastronomico' => 'gastronomia_anna_bistro.jpg',
                'horarios_local_gastronomico' => 'Lunes a Domingos de 8hs a 00:30hs',
                'ubicacion_local_gastronomico' => 'Avenida Juan B. Justo 161, M5500 Mendoza',
                'contacto_local_gastronomico' => '02614251818',
                'url_sitio_web_local_gastronomico' => 'http://www.annabistro.com.ar/',
                'tiene_descuentos_ofertas' => true,
                'tiene_wifi' => true,
                'tiene_estacionamiento' => true,
                'acepta_mascotas' => false,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'apto_vegetarianos' => true,
                'apto_veganos' => false,
                'apto_sin_tacc' => false,
                'apto_intolerantes_lactosa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_local_gastronomico' => 2,
                'provincia_id' => 1,
                'tipo_gastronomia_id' => 2,
                'nombre_local_gastronomico' => 'Don Mario',
                'imagen_local_gastronomico' => 'gastronomia_don_mario.jpg',
                'horarios_local_gastronomico' => 'Lunes a Domingos de 8hs a 00:30hs',
                'ubicacion_local_gastronomico' => '1499 M5521KMA 25 de Mayo 1324 Dorrego, M5521 KMA, Mendoza',
                'contacto_local_gastronomico' => '02614310810',
                'url_sitio_web_local_gastronomico' => 'http://www.donmario.com.ar/',
                'tiene_descuentos_ofertas' => true,
                'tiene_wifi' => true,
                'tiene_estacionamiento' => false,
                'acepta_mascotas' => false,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'apto_vegetarianos' => false,
                'apto_veganos' => false,
                'apto_sin_tacc' => true,
                'apto_intolerantes_lactosa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_local_gastronomico' => 3,
                'provincia_id' => 1,
                'tipo_gastronomia_id' => 3,
                'nombre_local_gastronomico' => 'Bianco&Nero',
                'imagen_local_gastronomico' => 'gastronomia_bianco_nero.jpg',
                'horarios_local_gastronomico' => 'Lunes a Domingos de 9:30hs a 21:00hs',
                'ubicacion_local_gastronomico' => 'Arístides Villanueva 142 144, M5500 Mendoza',
                'contacto_local_gastronomico' => '02614239420',
                'url_sitio_web_local_gastronomico' => 'http://www.bianco-nero.com.ar/',
                'tiene_descuentos_ofertas' => true,
                'tiene_wifi' => true,
                'tiene_estacionamiento' => true,
                'acepta_mascotas' => false,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'apto_vegetarianos' => true,
                'apto_veganos' => true,
                'apto_sin_tacc' => false,
                'apto_intolerantes_lactosa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_local_gastronomico' => 4,
                'provincia_id' => 1,
                'tipo_gastronomia_id' => 3,
                'nombre_local_gastronomico' => 'Azafrán',
                'imagen_local_gastronomico' => 'gastronomia_azafran.jpg',
                'horarios_local_gastronomico' => 'Lunes a Domingos de 11:00hs a 23:00hs',
                'ubicacion_local_gastronomico' => 'Arístides Villanueva 142 144, M5500 Mendoza',
                'contacto_local_gastronomico' => '02614239420',
                'url_sitio_web_local_gastronomico' => 'http://azafranresto.com/',
                'tiene_descuentos_ofertas' => true,
                'tiene_wifi' => false,
                'tiene_estacionamiento' => false,
                'acepta_mascotas' => false,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'apto_vegetarianos' => true,
                'apto_veganos' => true,
                'apto_sin_tacc' => true,
                'apto_intolerantes_lactosa' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
