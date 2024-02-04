<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert([
            'id_libro' => 1,
            'titulo' => 'Luna Nueva',
            'categoria' => 'fantasia',
            'autor_id' => 2,
            'descripcion' => 'Escrito por Stephanie',
            'precio' => 21.10,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 2,
            'titulo' => 'Crepusculo',
            'categoria' => 'fantasia',
            'autor_id' => 2,
            'descripcion' => 'Un amor peligroso',
            'precio' => 21.10,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 3,
            'titulo' => 'Hamlet',
            'categoria' => 'tragedia',
            'autor_id' => 4,
            'descripcion' => 'Escrito por Shakespeare',
            'precio' => 14.20,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 4,
            'titulo' => 'La reina en el paraiso de las corrientes de aire',
            'categoria' => 'novela',
            'autor_id' => 6,
            'descripcion' => 'trilogia de Stieg',
            'precio' => 17.45,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 5,
            'titulo' => 'El viejo y el mar',
            'categoria' => 'ficcion',
            'autor_id' => 5,
            'descripcion' => 'Escrito por Hemingway',
            'precio' => 15.90,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 6,
            'titulo' => 'Discurso del metodo',
            'categoria' => 'filosofia',
            'autor_id' => 3,
            'descripcion' => 'Escrito por Descartes',
            'precio' => 12.60,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 7,
            'titulo' => 'La vida es bella',
            'categoria' => 'historica',
            'autor_id' => 1,
            'descripcion' => 'Escrito por Roberto Benigni',
            'precio' => 11.50,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 8,
            'titulo' => 'La chica que soñaba con una cerilla y un bidon de gasolina',
            'categoria' => 'novela',
            'autor_id' => 6,
            'descripcion' => 'trilogia de Stieg',
            'precio' => 17.45,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 9,
            'titulo' => 'Los pilares de la tierra',
            'categoria' => 'narrativa',
            'autor_id' => 7,
            'descripcion' => 'Escrito por Ken Follet',
            'precio' => 19.50,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 10,
            'titulo' => 'El hipnotista',
            'categoria' => 'policiaca',
            'autor_id' => 8,
            'descripcion' => 'Escrito por Lars Kepler',
            'precio' => 18.12,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 11,
            'titulo' => 'El ocho',
            'categoria' => 'intriga',
            'autor_id' => 9,
            'descripcion' => 'escrito por Katherine Neville',
            'precio' => 16.75,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 12,
            'titulo' => 'Luna Funesta',
            'categoria' => 'ficcion',
            'autor_id' => 10,
            'descripcion' => 'Escrito por Michael Connelly',
            'precio' => 18.21,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 13,
            'titulo' => 'Eclipse',
            'categoria' => 'fantasia',
            'autor_id' => 2,
            'descripcion' => 'Unos dicen que el mundo sucumbira en el fuego',
            'precio' => 21.10,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 14,
            'titulo' => 'Los hombres que no amaaban a las mujeres',
            'categoria' => 'novela',
            'autor_id' => 6,
            'descripcion' => 'trilogia de Stieg',
            'precio' => 17.45,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 15,
            'titulo' => 'Amanecer',
            'categoria' => 'fantasia',
            'autor_id' => 2,
            'descripcion' => 'Un amor peligroso',
            'precio' => 21.10,
        ]);
        DB::table('libros')->insert([
            'id_libro' => 16,
            'titulo' => 'El hombre de arena',
            'categoria' => 'policiaca',
            'autor_id' => 8,
            'descripcion' => 'el inspector Joona Linna',
            'precio' => 16.70,
        ]);
    }
}