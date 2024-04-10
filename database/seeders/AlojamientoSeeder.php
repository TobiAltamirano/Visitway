<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlojamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alojamientos')->insert([
            [
                'id_alojamiento' => 1,
                'provincia_id' => 1,
                'tipo_alojamiento_id' => 1,
                'nombre_alojamiento' => 'Sheraton Mendoza Hotel',
                'imagen_alojamiento' => 'alojamientos_sheraton_mendoza.jpg',
                'precio_alojamiento' => 160.937,
                'horarios_alojamiento' => 'Hora de entrada: 15:00hs - Hora de salida: 12:00hs',
                'ubicacion_alojamiento' => 'Primitivo de la Reta 989, M5500 Mendoza',
                'contacto_alojamiento' => '02614415500',
                'url_sitio_web_alojamiento' => 'https://www.marriott.com/en-us/hotels/mdzsi-sheraton-mendoza-hotel/overview/?scid=f2ae0541-1279-4f24-b197-a979c79310b0',
                'tiene_descuentos_ofertas' => false,
                'tiene_wifi' => true,
                'tiene_estacionamiento' => true,
                'acepta_mascotas' => false,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_alojamiento' => 2,
                'provincia_id' => 1,
                'tipo_alojamiento_id' => 1,
                'nombre_alojamiento' => 'Villa Mansa Wine Hotel & Spa',
                'imagen_alojamiento' => 'alojamientos_villa_mansa_wine_hotel_spa.jpg',
                'precio_alojamiento' => 71.998,
                'horarios_alojamiento' => 'Hora de entrada: 15:00hs - Hora de salida: 10:00hs',
                'ubicacion_alojamiento' => 'Roque Sáenz Peña 4900, M5509 Vistalba, Mendoza',
                'contacto_alojamiento' => '02614983258',
                'url_sitio_web_alojamiento' => 'http://www.villamansa.com/',
                'tiene_descuentos_ofertas' => true,
                'tiene_wifi' => true,
                'tiene_estacionamiento' => false,
                'acepta_mascotas' => true,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_alojamiento' => 3,
                'provincia_id' => 1,
                'tipo_alojamiento_id' => 2,
                'nombre_alojamiento' => 'El Mangrullo',
                'imagen_alojamiento' => 'alojamientos_el_mangrullo.jpeg',
                'precio_alojamiento' => 71.998,
                'horarios_alojamiento' => 'Ingreso a partir de las 13:00 hs.
                Egreso 10:00 hs.',
                'ubicacion_alojamiento' => 'Av. Champagnat 3002, M5539 Las Heras, Mendoza',
                'contacto_alojamiento' => '02612763616',
                'url_sitio_web_alojamiento' => 'https://sites.google.com/view/camping-el-mangrullo',
                'tiene_descuentos_ofertas' => true,
                'tiene_wifi' => false,
                'tiene_estacionamiento' => true,
                'acepta_mascotas' => true,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idAlojamientos' => 4,
                'provincia_id' => 1,
                'tipo_alojamiento_id' => 2,
                'nombre_alojamiento' => 'Casco El Trapiche',
                'imagen_alojamiento' => 'alojamientos_el_trapiche.jpg',
                'precio_alojamiento' => 71.998,
                'horarios_alojamiento' => 'Ingreso a partir de las 10:00 hs.
                Egreso 22:00 hs.',
                'ubicacion_alojamiento' => 'San Lorenzo 576, M5500 Mendoza',
                'contacto_alojamiento' => '0261155579518',
                'url_sitio_web_alojamiento' => 'http://trapiche.xtadia.com/',
                'tiene_descuentos_ofertas' => false,
                'tiene_wifi' => false,
                'tiene_estacionamiento' => false,
                'acepta_mascotas' => false,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}