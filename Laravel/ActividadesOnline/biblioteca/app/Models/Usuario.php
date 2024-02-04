<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey = 'id_usuario';
    protected $fillable = ['nombreusuario', 'password', 'telefono', 'fechentrega'];

    protected $attributes = [
        'nombreusuario' => 'Desconocido', 
        'password' => '1111',
        'telefono' => '6666666666',
        'fechentrega' => '2021-01-01',
    ];
}
