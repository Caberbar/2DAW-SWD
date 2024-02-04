<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Llama a los seeders individuales aquí
        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(AlquilerSeeder::class);
        $this->call(PassUsuarioSeeder::class);
    }
}
