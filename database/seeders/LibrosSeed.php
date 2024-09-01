<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class LibrosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Model::unguard();
        $Libros = [
            [
                'titulo' => 'Cien años de soledad',
                'autor' => 'Gabriel García Márquez',
                'año_publicacion' => 1967,
                'genero' => 'Realismo mágico',
                'precio' => 19.99,
                'descripcion' => 'Una de las obras más significativas de la literatura latinoamericana.',
                'editorial' => 'Sudamericana',
                'idioma' => 'Español',
                'estado' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => '1984',
                'autor' => 'George Orwell',
                'año_publicacion' => 1949,
                'genero' => 'Distopía',
                'precio' => 15.50,
                'descripcion' => 'Una novela sobre un futuro distópico donde el totalitarismo domina.',
                'editorial' => 'Secker & Warburg',
                'idioma' => 'Inglés',
                'estado' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Don Quijote de la Mancha',
                'autor' => 'Miguel de Cervantes',
                'año_publicacion' => 1605,
                'genero' => 'Novela',
                'precio' => 25.00,
                'descripcion' => 'Considerada una de las mejores obras literarias jamás escritas.',
                'editorial' => 'Francisco de Robles',
                'idioma' => 'Español',
                'estado' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'El Gran Gatsby',
                'autor' => 'F. Scott Fitzgerald',
                'año_publicacion' => 1925,
                'genero' => 'Novela',
                'precio' => 12.75,
                'descripcion' => 'Una crítica a la sociedad estadounidense durante los años 20.',
                'editorial' => 'Charles Scribner\'s Sons',
                'idioma' => 'Inglés',
                'created_at' => now(),
                'estado' => '1',
                'updated_at' => now(),
            ],
        ];

        foreach ($Libros as $Libros){
            \App\Models\Libros::create($Libros);
        }
        Model::reguard();
    }
}
