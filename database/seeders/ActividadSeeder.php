<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actividades')->insert([
            [
                'id_actividad' => 1,
                'provincia_id' => 1,
                'tipo_actividad_id' => 1,
                'nombre_actividad' => 'Cañon del Atuel',
                'imagen_actividad' => 'actividades_canion_del_atuel.jpg',
                'descripcion_actividad' => 'El Cañón del Atuel es un impresionante accidente geográfico. Este cañón, esculpido por el río Atuel a lo largo de millones de años, ofrece un paisaje de ensueño que combina la majestuosidad de las altas paredes de roca con la serenidad de aguas turquesas que serpentean entre ellas. Las formaciones rocosas adoptan una variedad de formas caprichosas, y el contraste entre los tonos terrosos de las montañas y el azul vibrante del río crea un espectáculo visual inolvidable. Este sitio es un paraíso para los amantes de la naturaleza, los fotógrafos y los aventureros por igual, y ofrece numerosas oportunidades para explorar y disfrutar de la belleza natural de la región.',
                'precio_actividad' => 0,
                'horarios_actividad' => 'Lunes a Domingos de 8hs a 20hs',
                'ubicacion_actividad' => 'RP173, San Rafael, Mendoza',
                'contacto_actividad' => '',
                'url_sitio_web_actividad' => '',
                'duracion_actividad' => 4,
                'tiene_descuentos_ofertas' => true,
                'es_accesible' => false,
                'es_gratis' => true,
                'acepta_mascotas' => true,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_actividad' => 2,
                'provincia_id' => 1,
                'tipo_actividad_id' => 2,
                'nombre_actividad' => 'Parque General San Martín',
                'imagen_actividad' => 'actividades_parque_general_san_martin.jpg',
                'descripcion_actividad' => 'El Parque General San Martín es un icónico espacio verde situado en el corazón de la ciudad de Mendoza, Argentina. Este vasto y hermoso parque urbano es conocido por su serenidad y su impresionante belleza, que lo convierten en un refugio para los habitantes locales y un lugar de visita obligada para los turistas. Rodeado por imponentes árboles, el parque ofrece amplios paseos arbolados, lagos serenos y jardines exquisitamente cuidados. Los visitantes pueden disfrutar de actividades como caminatas, ciclismo, paseos en bote en el lago y picnics en un entorno tranquilo y natural. Además, el parque alberga el Cerro de la Gloria, una colina que ofrece vistas panorámicas de la ciudad y una estatua del General José de San Martín, un destacado líder de la independencia argentina. Este parque es un remanso de paz en medio de la bulliciosa ciudad y es un lugar ideal para relajarse, hacer ejercicio o simplemente disfrutar de la naturaleza.',
                'precio_actividad' => 0,
                'horarios_actividad' => 'Abierto todos los días las 24hs',
                'ubicacion_actividad' => 'Av Emilio Civit 701, M5500 Mendoza',
                'contacto_actividad' => '',
                'url_sitio_web_actividad' => 'http://www.ciudaddemendoza.gov.ar/',
                'duracion_actividad' => 0,
                'tiene_descuentos_ofertas' => true,
                'es_accesible' => true,
                'es_gratis' => true,
                'acepta_mascotas' => true,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_actividad' => 3,
                'provincia_id' => 1,
                'tipo_actividad_id' => 3,
                'nombre_actividad' => 'Museo de Ciencias Agrarias y del Vino',
                'imagen_actividad' => 'actividades_museo_vino_ciencia_agrarias.jpg',
                'descripcion_actividad' => 'El Museo de Ciencia Agraria y del Vino en Mendoza es un lugar fascinante que combina la historia vitivinícola con la ciencia agraria. Este museo ofrece a los visitantes una experiencia educativa única donde pueden sumergirse en el mundo del cultivo de uvas, la producción de vino y la agricultura en la región. Podrás explorar exposiciones interactivas y aprender sobre las técnicas de cultivo, la vinificación y la importancia de la viticultura en Mendoza. Además, el museo ofrece degustaciones de vinos y te brinda la oportunidad de conocer la rica herencia vitivinícola de la región. Un lugar ideal para los amantes del vino y aquellos interesados en la agricultura, el Museo de Ciencia Agraria y del Vino es una parada obligada en tu visita a Mendoza.',
                'precio_actividad' => 2000,
                'horarios_actividad' => 'Lunes a viernes de 8hs a 20hs',
                'ubicacion_actividad' => 'Almte. Brown 52, Luján de Cuyo, Mendoza',
                'contacto_actividad' => '02614054809',
                'url_sitio_web_actividad' => 'http://www.fca.uncu.edu.ar/',
                'duracion_actividad' => 4,
                'tiene_descuentos_ofertas' => false,
                'es_accesible' => true,
                'es_gratis' => false,
                'acepta_mascotas' => false,
                'acepta_debito' => true,
                'acepta_credito' => true,
                'acepta_medios_digitales' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_actividad' => 4,
                'provincia_id' => 1,
                'tipo_actividad_id' => 1,
                'nombre_actividad' => 'Trekking en el Aconcagua',
                'imagen_actividad' => 'actividades_trekking_aconcagua.jpg',
                'descripcion_actividad' => 'Caminata a través de los Andes en esta excursión de día completo desde Mendoza. Ascienda a la cima de Lomas Blancas en el Cordón del Plata, una región con vistas impactantes de las cumbres cubiertas de nieve. Siga a su guía experimentado en senderismo en esta caminata de dificultad baja-moderada, y aprenda sobre la flora y fauna nativas mientras camina durante 5-6 horas. Disfrute de impresionantes vistas de las montañas circundantes y los exuberantes valles desde la cumbre, 3650 metros (11 975 pies). El uso del equipo, el almuerzo y el traslado de ida y vuelta desde los hoteles en Mendoza están incluidos.',
                'precio_actividad' => 2400,
                'horarios_actividad' => 'Lunes a Domingos de 9hs a 22hs',
                'ubicacion_actividad' => 'Salida del hotel',
                'contacto_actividad' => '+542614760851',
                'url_sitio_web_actividad' => 'https://www.andes-vertical.com/es/',
                'duracion_actividad' => 8,
                'tiene_descuentos_ofertas' => true,
                'es_accesible' => false,
                'es_gratis' => false,
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