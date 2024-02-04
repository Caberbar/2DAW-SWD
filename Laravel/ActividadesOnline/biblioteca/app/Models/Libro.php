<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Libro extends Model
{    protected $primaryKey = 'id_libro';
    protected $fillable = ['titulo', 'categoria', 'autor_id', 'descripcion', 'precio'];

    protected $attributes = [
        'titulo' => 'Desconocido', 
        'categoria' => 'Desconocido',
        'descripcion' => 'Desconocido',
        'precio' => 0.0,
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id', 'id');
    }
}
