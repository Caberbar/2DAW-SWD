<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlquilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alquileres')->insert([
            'alquiler_id' => 1,
            'usuario_id' => 2,
            'libro_id' => 5,
            'fechprestamo' => '2019/08/07',
            'fechdevolucion' => '2019/09/14',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 2,
            'usuario_id' => 2,
            'libro_id' => 3,
            'fechprestamo' => '2019/06/07',
            'fechdevolucion' => '2019/10/11',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 3,
            'usuario_id' => 4,
            'libro_id' => 3,
            'fechprestamo' => '2019/07/07',
            'fechdevolucion' => '2019/08/18',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 4,
            'usuario_id' => 1,
            'libro_id' => 2,
            'fechprestamo' => '2019/08/09',
            'fechdevolucion' => '2019/09/24',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 5,
            'usuario_id' => 3,
            'libro_id' => 2,
            'fechprestamo' => '2019/04/07',
            'fechdevolucion' => '2019/05/23',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 6,
            'usuario_id' => 3,
            'libro_id' => 5,
            'fechprestamo' => '2019/04/12',
            'fechdevolucion' => '2019/06/14',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 7,
            'usuario_id' => 3,
            'libro_id' => 5,
            'fechprestamo' => '2019/09/21',
            'fechdevolucion' => '2019/10/28',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 8,
            'usuario_id' => 3,
            'libro_id' => 5,
            'fechprestamo' => '2019/05/06',
            'fechdevolucion' => '2019/07/16',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 9,
            'usuario_id' => 5,
            'libro_id' => 7,
            'fechprestamo' => '2019/10/07',
            'fechdevolucion' => '2019/11/11',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 10,
            'usuario_id' => 2,
            'libro_id' => 1,
            'fechprestamo' => '2019/07/06',
            'fechdevolucion' => '2019/08/18',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 11,
            'usuario_id' => 1,
            'libro_id' => 4,
            'fechprestamo' => '2019/09/07',
            'fechdevolucion' => '2019/10/09',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 12,
            'usuario_id' => 6,
            'libro_id' => 4,
            'fechprestamo' => '2019/10/12',
            'fechdevolucion' => '2019/11/21',
        ]);

        DB::table('alquileres')->insert([
            'alquiler_id' => 13,
            'usuario_id' => 6,
            'libro_id' => 7,
            'fechprestamo' => '2019/10/07',
            'fechdevolucion' => '2019/11/05',
        ]);
    }
}
