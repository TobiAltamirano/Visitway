<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Corremos el seed de provincias
     */
    public function run(): void
    {
        DB::table('provincias')->insert([
            [
                'id_provincia' => 1,
                'nombre_provincia' => 'Mendoza',
                'imagen_provincia' => 'mendoza.jpg',
                'descripcion_provincia' => 'Mendoza, la "Tierra del Sol y del Buen Vino," es una provincia argentina que cautiva con su espectacular belleza natural y rica tradición vinícola. Rodeada por la majestuosa Cordillera de los Andes, esta región disfruta de un clima soleado y seco, ideal para los amantes del aire libre y el vino. Mendoza es famosa por sus viñedos, especialmente el Malbec, y ofrece una experiencia de degustación incomparable. Además, su legado cultural gauchesco se refleja en festivales, música, danzas y deliciosos platos típicos. Esta provincia combina la emoción de la aventura en la montaña, con el cuidado del medio ambiente y la autenticidad de la cultura argentina, creando un destino turístico excepcional.',
                'ubicacion_provincia' => 'Mendoza se encuentra en la región de Cuyo, en la zona occidental de Argentina. Limita al norte con la provincia de San Juan, al este con San Luis, al sur con La Pampa y al oeste con Chile.',
                'imagen_ubicacion_provincia' => 'example-img',
                'cultura_caracteristicas_provincia' => 'Mendoza es un crisol de culturas y tradiciones que se entrelazan en su rica herencia. Los habitantes de Mendoza, conocidos como mendocinos, son famosos por su hospitalidad y calidez. La influencia de la cultura indígena es evidente en la música, la danza y las artesanías de la provincia. Además, la provincia es el hogar de numerosas festividades y celebraciones, incluida la Fiesta Nacional de la Vendimia, que combina la cultura vitivinícola con actuaciones artísticas impresionantes.',
                'flora_fauna_provincia' => 'Mendoza alberga una asombrosa variedad de flora y fauna, adaptadas a su diversidad geográfica que abarca desde el árido desierto en el este hasta las zonas montañosas en el oeste. La región árida del este está salpicada de arbustos resistentes como el jarillal y el piquillín, que han desarrollado adaptaciones únicas para sobrevivir en condiciones de sequía. En contraste, las zonas montañosas y boscosas del oeste albergan una rica diversidad de flora, desde árboles autóctonos como el quebracho colorado hasta una amplia variedad de cactus. En cuanto a la fauna, Mendoza es hogar de especies como el zorro colorado, el guanaco y el puma en las áreas montañosas, mientras que en la zona este se encuentran aves como el hornero y el jote.',
                'historia_provincia' => 'Mendoza tiene una rica historia que abarca desde la época prehispánica hasta la actualidad. La ciudad de Mendoza fue fundada en 1561 por Pedro del Castillo, y la región fue un importante centro económico y cultural durante la época colonial española. Durante el siglo XIX, Mendoza tuvo un papel crucial en la independencia de Argentina. La provincia también es conocida por el devastador terremoto de 1861 que destruyó gran parte de la ciudad de Mendoza, lo que llevó a su reconstrucción. A lo largo de su historia, Mendoza ha sido un centro de actividad agrícola, incluida la viticultura, que ha contribuido significativamente a la economía de Argentina.',
                'region_provincia' => 'Cuyo',
                'created_at' => now(),
                'updated_at' => now(),

            ]
        ]);
    }
}