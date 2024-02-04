<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $primaryKey = 'alquiler_id';

    protected $table = 'alquileres';
    protected $fillable = ['libro_id', 'usuario_id', 'fechprestamo', 'fechdevolucion'];

    protected $attributes = [
        'fechprestamo' => '2021-01-01',
        'fechdevolucion' => '2021-01-02',
    ];

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id', 'id_libro');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id_usuario');
    }
}
