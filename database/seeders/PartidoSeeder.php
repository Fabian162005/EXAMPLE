<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partido;
use Illuminate\Support\Str;

class PartidoSeeder extends Seeder
{
    public function run()
    {
        $partidos = [
            ['name' => 'Acción Popular', 'filename' => 'accion-popular', 'logo' => 'image1.png'],
            ['name' => 'Fuerza Popular', 'filename' => 'fuerza-popular', 'logo' => 'image2.png'],
            ['name' => 'Partido de los Trabajadores y Emprendedores (PTE-Perú)', 'filename' => 'partido-de-los-trabajadores-y-emprendedores-pte-peru', 'logo' => 'image3.png'],
            ['name' => 'Ahora Nación - AN', 'filename' => 'ahora-nacion-an', 'logo' => 'image4.png'],
            ['name' => 'Juntos por el Perú', 'filename' => 'juntos-por-el-peru', 'logo' => 'image5.png'],
            ['name' => 'Partido del buen Gobierno', 'filename' => 'partido-del-buen-gobierno', 'logo' => 'image6.png'],
            ['name' => 'Alianza para el Progreso', 'filename' => 'alianza-para-el-progreso', 'logo' => 'image7.png'],
            ['name' => 'Libertad Popular', 'filename' => 'libertad-popular', 'logo' => 'image8.png'],
            ['name' => 'Partido Demócrata Unido Perú', 'filename' => 'partido-democrata-unido-peru', 'logo' => 'image9.png'],
            ['name' => 'Avanza País - Partido de Integración Social', 'filename' => 'avanza-pais-partido-de-integracion-social', 'logo' => 'image10.png'],
            ['name' => 'Nuevo Perú por el Buen Vivir', 'filename' => 'nuevo-peru-por-el-buen-vivir', 'logo' => 'image11.png'],
            ['name' => 'Partido Demócrata Verde', 'filename' => 'partido-democrata-verde', 'logo' => 'image12.png'],
            ['name' => 'Batalla Perú', 'filename' => 'batalla-peru', 'logo' => 'image13.png'],
            ['name' => 'Partido Aprista Peruano', 'filename' => 'partido-aprista-peruano', 'logo' => 'image14.png'],
            ['name' => 'Partido Democrático Federal', 'filename' => 'partido-democratico-federal', 'logo' => 'image15.png'],
            ['name' => 'Fe en el Perú', 'filename' => 'fe-en-el-peru', 'logo' => 'image16.png'],
            ['name' => 'Partido Ciudadanos por el Perú', 'filename' => 'partido-ciudadanos-por-el-peru', 'logo' => 'image17.png'],
            ['name' => 'Partido Democrático Somos Perú', 'filename' => 'partido-democratico-somos-peru', 'logo' => 'image18.png'],
            ['name' => 'Frente Popular Agrícola FIA del Perú', 'filename' => 'frente-popular-agricola-fia-del-peru', 'logo' => 'image19.png'],
            ['name' => 'Partido Cívico Obras', 'filename' => 'partido-civico-obras', 'logo' => 'image20.png'],
            ['name' => 'Partido Frente de la Esperanza 2021', 'filename' => 'partido-frente-de-la-esperanza-2021', 'logo' => 'image21.png'],
            ['name' => 'Partido Morado', 'filename' => 'partido-morado', 'logo' => 'image22.png'],
            ['name' => 'Partido Político Perú Acción', 'filename' => 'partido-politico-peru-accion', 'logo' => 'image23.png'],
            ['name' => 'Perú Moderno', 'filename' => 'peru-moderno', 'logo' => 'image24.png'],
            ['name' => 'Partido País para Todos', 'filename' => 'partido-pais-para-todos', 'logo' => 'image25.png'],
            ['name' => 'Partido Político Perú Primero', 'filename' => 'partido-politico-peru-primero', 'logo' => 'image26.png'],
            ['name' => 'Podemos Perú', 'filename' => 'podemos-peru', 'logo' => 'image27.png'],
            ['name' => 'Partido Patriótico del Perú', 'filename' => 'partido-patriotico-del-peru', 'logo' => 'image28.png'],
            ['name' => 'Partido Político Peruanos Unidos: ¡Somos Libres!', 'filename' => 'partido-politico-peruanos-unidos-somos-libres', 'logo' => 'image29.png'],
            ['name' => 'Primero La Gente - Comunidad, Ecología, Libertad y Progreso', 'filename' => 'primero-la-gente-comunidad-ecologia-libertad-y-progreso', 'logo' => 'image30.png'],
            ['name' => 'Partido Político Cooperación Popular', 'filename' => 'partido-politico-cooperacion-popular', 'logo' => 'image31.png'],
            ['name' => 'Partido Político Popular Voces del Pueblo', 'filename' => 'partido-politico-popular-voces-del-pueblo', 'logo' => 'image32.png'],
            ['name' => 'Partido Político PRIN', 'filename' => 'partido-politico-prin', 'logo' => 'image33.png'],
            ['name' => 'Progresemos', 'filename' => 'progresemos', 'logo' => 'image34.png'],
            ['name' => 'Partido Político Fuerza Moderna', 'filename' => 'partido-politico-fuerza-moderna', 'logo' => 'image35.png'],
            ['name' => 'Partido Popular Cristiano - PPC', 'filename' => 'partido-popular-cristiano-ppc', 'logo' => 'image36.png'],
            ['name' => 'Renovación Popular', 'filename' => 'renovacion-popular', 'logo' => 'image37.png'],
            ['name' => 'Partido Político Integridad Democrática', 'filename' => 'partido-politico-integridad-democratica', 'logo' => 'image38.png'],
            ['name' => 'Partido SiCreo', 'filename' => 'partido-sicreo', 'logo' => 'image39.png'],
            ['name' => 'Salvemos al Perú', 'filename' => 'salvemos-al-peru', 'logo' => 'image40.png'],
            ['name' => 'Partido Político Nacional Perú Libre', 'filename' => 'partido-politico-nacional-peru-libre', 'logo' => 'image41.png'],
            ['name' => 'Partido Unidad y Paz', 'filename' => 'partido-unidad-y-paz', 'logo' => 'image42.png'],
            ['name' => 'Un Camino Diferente', 'filename' => 'un-camino-diferente', 'logo' => 'image43.png'],
        ];

        foreach ($partidos as $partido) {
            Partido::updateOrCreate(
                ['slug' => Str::slug($partido['filename'])],
                [
                    'slug' => Str::slug($partido['filename']),
                    'name' => $partido['name'],
                    'filename' => $partido['filename'],
                    'logo' => $partido['logo'],
                    'contenido_html' => '<p>Contenido de ejemplo para ' . e($partido['name']) . '.</p>',
                ]
            );
        }
    }
}
