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

            ],
            [
                'id_provincia' => 2,
                'nombre_provincia' => 'Buenos Aires',
                'imagen_provincia' => 'buenos_aires.jpg',
                'descripcion_provincia' => 'Buenos Aires, la provincia más grande y poblada de Argentina, es un crisol de culturas, historia y modernidad. Alberga la vibrante ciudad de Buenos Aires, conocida por su arquitectura europea, vida nocturna, y la pasión por el tango. Fuera de la capital, la provincia ofrece paisajes diversos que van desde las extensas pampas hasta playas atlánticas. La gastronomía porteña es famosa por su carne de res y vinos, haciendo de Buenos Aires un destino esencial para los amantes de la comida y el vino.',
                'ubicacion_provincia' => 'La provincia de Buenos Aires se encuentra en la región central-este de Argentina, limitando al noreste con el Río de la Plata y Uruguay, al este con el océano Atlántico, al sur con La Pampa, al oeste con Córdoba y Santa Fe, y al norte con Entre Ríos.',
                'imagen_ubicacion_provincia' => 'example-img',
                'cultura_caracteristicas_provincia' => 'La cultura de Buenos Aires es una mezcla vibrante de influencias europeas y latinoamericanas. La ciudad de Buenos Aires, en particular, es famosa por el tango, sus teatros y su vida cultural dinámica. La provincia es también hogar de numerosas festividades, museos y eventos culturales, destacándose por su diversidad artística y cultural.',
                'flora_fauna_provincia' => 'La provincia de Buenos Aires tiene una rica biodiversidad, especialmente en sus zonas rurales y costeras. Las pampas están cubiertas por pastizales que son el hogar de numerosas especies de aves y pequeños mamíferos. En la costa atlántica, se pueden encontrar dunas, playas y bosques que albergan una gran variedad de flora y fauna marina.',
                'historia_provincia' => 'Buenos Aires tiene una historia rica y compleja que se remonta a la época precolombina. La ciudad de Buenos Aires fue fundada en 1536 por Pedro de Mendoza y refundada en 1580 por Juan de Garay. Durante la época colonial, la provincia fue un importante centro comercial y cultural. En el siglo XIX, Buenos Aires jugó un papel crucial en la independencia de Argentina y en la posterior formación del país. La provincia también fue el epicentro de numerosos movimientos políticos y sociales a lo largo de la historia argentina.',
                'region_provincia' => 'Buenos Aires',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_provincia' => 3,
                'nombre_provincia' => 'Neuquén',
                'imagen_provincia' => 'neuquen.jpg',
                'descripcion_provincia' => 'Neuquén es una provincia argentina ubicada en la región de la Patagonia, conocida por sus paisajes impresionantes que incluyen lagos cristalinos, montañas nevadas y bosques densos. Neuquén es un destino popular para el ecoturismo y los deportes al aire libre como el esquí, el senderismo y la pesca. La región también es famosa por sus yacimientos de petróleo y gas, así como por su producción de vino y manzanas.',
                'ubicacion_provincia' => 'Neuquén se encuentra en la región sur de Argentina, limitando al norte con Mendoza, al este con La Pampa y Río Negro, al sur con Río Negro, y al oeste con Chile.',
                'imagen_ubicacion_provincia' => 'example-img',
                'cultura_caracteristicas_provincia' => 'La cultura de Neuquén está profundamente influenciada por su herencia patagónica y mapuche. La provincia celebra numerosas festividades que reflejan esta rica mezcla cultural, incluyendo la Fiesta Nacional de la Manzana y el Festival del Chivito. La gastronomía local incluye platos tradicionales como el chivito al asador y empanadas.',
                'flora_fauna_provincia' => 'Neuquén cuenta con una gran diversidad de flora y fauna, adaptadas a su variado paisaje que va desde los Andes hasta las estepas patagónicas. En las zonas montañosas, se encuentran bosques de araucarias y lengas, mientras que las estepas albergan arbustos resistentes y hierbas. Entre la fauna se destacan el huemul, el cóndor andino y diversas especies de peces en sus lagos y ríos.',
                'historia_provincia' => 'La historia de Neuquén está marcada por la presencia de los pueblos originarios mapuche y tehuelche. Durante la colonización española, la región permaneció en gran parte inexplorada hasta la Campaña del Desierto en el siglo XIX. La llegada del ferrocarril a principios del siglo XX y el descubrimiento de petróleo en la década de 1910 transformaron la economía y el desarrollo de la provincia.',
                'region_provincia' => 'Patagonicas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_provincia' => 4,
                'nombre_provincia' => 'Catamarca',
                'imagen_provincia' => 'catamarca.jpg',
                'descripcion_provincia' => 'Catamarca, ubicada en el noroeste de Argentina, es conocida por sus paisajes montañosos y su rica herencia cultural. La provincia cuenta con una impresionante diversidad de flora y fauna, así como con importantes sitios arqueológicos y una fuerte tradición artesanal. Los turistas pueden disfrutar de actividades como el senderismo, la observación de aves y la exploración de antiguas ruinas.',
                'ubicacion_provincia' => 'Catamarca se encuentra en la región noroeste de Argentina, limitando al norte con Salta, al este con Tucumán y Santiago del Estero, al sur con Córdoba y La Rioja, y al oeste con Chile.',
                'imagen_ubicacion_provincia' => 'example-img',
                'cultura_caracteristicas_provincia' => 'La cultura de Catamarca está profundamente influenciada por su historia precolombina y colonial. La provincia celebra numerosas festividades que reflejan esta rica herencia, como la Fiesta Nacional e Internacional del Poncho, que muestra la artesanía local, la música y la danza tradicional.',
                'flora_fauna_provincia' => 'Catamarca alberga una diversidad de ecosistemas, desde los valles fértiles hasta las altas cumbres andinas. Entre la flora se destacan especies como el cardón y la jarilla, mientras que la fauna incluye guanacos, cóndores y flamencos andinos. Las reservas naturales protegen estos hábitats únicos y sus especies endémicas.',
                'historia_provincia' => 'La historia de Catamarca se remonta a la época precolombina, con la presencia de los pueblos diaguitas. Durante la colonización española, la región se convirtió en un importante centro agrícola y minero. La ciudad de San Fernando del Valle de Catamarca fue fundada en 1683. En el siglo XIX, Catamarca jugó un papel activo en las guerras de independencia y en el desarrollo de la nación argentina.',
                'region_provincia' => 'Noroeste',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
