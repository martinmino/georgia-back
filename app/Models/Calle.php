<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
    protected $table = 'calles';

    protected $fillable = [
        'codigo',
        'nombre',
        'desde',
        'hasta'
    ];
}
