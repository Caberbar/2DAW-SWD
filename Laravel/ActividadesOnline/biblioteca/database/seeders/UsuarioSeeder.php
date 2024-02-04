<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id_usuario' => 1,
            'nombreusuario' => 'Ana Jimenez',
            'password' => '1111',
            'telefono' => '950121212',
            'fechentrega' => '2019/10/10',
        ]);
        DB::table('usuarios')->insert([
            'id_usuario' => 2,
            'nombreusuario' => 'Antonio Bueno',
            'password' => '1111',
            'telefono' => '950454545',
            'fechentrega' => '2019/10/10',
        ]);
        DB::table('usuarios')->insert([
            'id_usuario' => 3,
            'nombreusuario' => 'Maria Jose Garcia',
            'password' => '1111',
            'telefono' => '690909090',
            'fechentrega' => '2018/07/02',
        ]);
        DB::table('usuarios')->insert([
            'id_usuario' => 4,
            'nombreusuario' => 'Jose Alonso',
            'password' => '1111',
            'telefono' => '950505050',
            'fechentrega' => '2019-10-10',
        ]);
        DB::table('usuarios')->insert([
            'id_usuario' => 5,
            'nombreusuario' => 'Paula Santiago',
            'password' => '1111',
            'telefono' => '950343434',
            'fechentrega' => '2019/03/25',
        ]);
        DB::table('usuarios')->insert([
            'id_usuario' => 6,
            'nombreusuario' => 'Manolo Lopez',
            'password' => '1111',
            'telefono' => '950123456',
            'fechentrega' => '2019/02/28',
        ]);
        DB::table('usuarios')->insert([
            'id_usuario' => 7,
            'nombreusuario' => 'Paula Gil',
            'password' => '1111',
            'telefono' => '950999999',
            'fechentrega' => '2019/10/10',
        ]);
        DB::table('usuarios')->insert([
            'id_usuario' => 8,
            'nombreusuario' => 'Teo Suarez',
            'password' => '1111',
            'telefono' => '950111111',
            'fechentrega' => '2019/03/25',
        ]);
        DB::table('usuarios')->insert([
            'id_usuario' => 9,
            'nombreusuario' => 'Rocio Merino',
            'password' => '1111',
            'telefono' => '710808080',
            'fechentrega' => '2019/02/28',
        ]);
        }
}