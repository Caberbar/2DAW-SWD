<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passusuarios')->insert([
            'id' => 1,
            'nombreusu' => 'pepe',
            'password' => '1111',
        ]);
        DB::table('passusuarios')->insert([
            'id' => 2,
            'nombreusu' => 'ana',
            'password' => '1111',
        ]);
        DB::table('passusuarios')->insert([
            'id' => 3,
            'nombreusu' => 'juan',
            'password' => '1111',
        ]);
        DB::table('passusuarios')->insert([
            'id' => 4,
            'nombreusu' => 'maria',
            'password' => '1111',
        ]);
        DB::table('passusuarios')->insert([
            'id' => 5,
            'nombreusu' => 'leo',
            'password' => '1111',
        ]);

    }
}