<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autores')->insert([
            'id' => 1,
            'apellidos' => 'Benigni',
            'nombre' => 'Roberto',
            'nacionalidad' => 'italiana',
            'sexo' => 'M',
            'edad' => 30,
        ]);

        DB::table('autores')->insert([
            'id' => 2,
            'apellidos' => 'Meyer',
            'nombre' => 'Stephenie',
            'nacionalidad' => 'estadounidense',
            'sexo' => 'F',
            'edad' => 43,
        ]);

        DB::table('autores')->insert([
            'id' => 3,
            'apellidos' => 'Descartes',
            'nombre' => 'Rene',
            'nacionalidad' => 'francesa',
            'sexo' => 'M',
            'edad' => 48,
        ]);

        DB::table('autores')->insert([
            'id' => 4,
            'apellidos' => 'Shakespeare',
            'nombre' => 'William',
            'nacionalidad' => 'británica',
            'sexo' => 'M',
            'edad' => 34,
        ]);

        DB::table('autores')->insert([
            'id' => 5,
            'apellidos' => 'Hemingway',
            'nombre' => 'Ernest',
            'nacionalidad' => 'estadounidense',
            'sexo' => 'M',
            'edad' => 51,
        ]);

        DB::table('autores')->insert([
            'id' => 6,
            'apellidos' => 'Larsson',
            'nombre' => 'Stieg',
            'nacionalidad' => 'sueca',
            'sexo' => 'M',
            'edad' => 46,
        ]);

        DB::table('autores')->insert([
            'id' => 7,
            'apellidos' => 'Follet',
            'nombre' => 'Ken',
            'nacionalidad' => 'estadounidense',
            'sexo' => 'M',
            'edad' => 50,
        ]);

        DB::table('autores')->insert([
            'id' => 8,
            'apellidos' => 'Kepler',
            'nombre' => 'Lars',
            'nacionalidad' => 'sueca',
            'sexo' => 'M',
            'edad' => 38,
        ]);

        DB::table('autores')->insert([
            'id' => 9,
            'apellidos' => 'Neville',
            'nombre' => 'Katherine',
            'nacionalidad' => 'estadounidense',
            'sexo' => 'F',
            'edad' => 41,
        ]);

        DB::table('autores')->insert([
            'id' => 10,
            'apellidos' => 'Scott',
            'nombre' => 'Michael',
            'nacionalidad' => 'estadounidense',
            'sexo' => 'M',
            'edad' => 52,
        ]);

        DB::table('autores')->insert([
            'id' => 11,
            'apellidos' => 'Sierra',
            'nombre' => 'Javier',
            'nacionalidad' => 'española',
            'sexo' => 'M',
            'edad' => 49,
        ]);

        DB::table('autores')->insert([
            'id' => 12,
            'apellidos' => 'Brown',
            'nombre' => 'Dan',
            'nacionalidad' => 'estadounidense',
            'sexo' => 'M',
            'edad' => 56,
        ]);

        DB::table('autores')->insert([
            'id' => 13,
            'apellidos' => 'Kostova',
            'nombre' => 'Elizabeth',
            'nacionalidad' => 'estadounidense',
            'sexo' => 'F',
            'edad' => 55,
        ]);

        DB::table('autores')->insert([
            'id' => 14,
            'apellidos' => 'Connelly',
            'nombre' => 'Michael',
            'nacionalidad' => 'estadounidense',
            'sexo' => 'M',
            'edad' => 48,
        ]);

        DB::table('autores')->insert([
            'id' => 15,
            'apellidos' => 'Ruiz Zafon',
            'nombre' => 'Carlos',
            'nacionalidad' => 'español',
            'sexo' => 'M',
            'edad' => 62,
        ]);

        DB::table('autores')->insert([
            'id' => 16,
            'apellidos' => 'Hawkins',
            'nombre' => 'Paula',
            'nacionalidad' => 'zimbabuense',
            'sexo' => 'F',
            'edad' => 45,
        ]);

        // Agrega las inserciones restantes...
    }
}
