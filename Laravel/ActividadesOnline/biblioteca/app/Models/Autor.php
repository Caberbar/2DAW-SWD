<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    protected $fillable = ['apellidos', 'nombre', 'nacionalidad', 'sexo', 'edad'];

    protected $attributes = [
        'nacionalidad' => 'Desconocida',
        'sexo' => 'M',
        'edad' => 0,
    ];
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
