<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
    protected $table = 'criminals'; 

    protected $fillable = [
        'Nombre',
        'Apellidos',
        'DNI',
        'Altura',
        'Peso',
        'Edad',
        'Crimen',
        'Estado',
        'Recompensa',
        'Foto',
        'Descripcion',
    ];
}
