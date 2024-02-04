<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id('id_libro');
            $table->string('titulo', 60);
            $table->string('categoria', 30);
            $table->unsignedBigInteger('autor_id');
            $table->string('descripcion', 100);
            $table->decimal('precio', 10, 2);
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autores')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};