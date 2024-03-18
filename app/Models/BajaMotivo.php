<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BajaMotivo extends Model
{
    protected $table = 'baja_motivos';

    protected $fillable = [
        'sistema_id',
        'descripcion'
    ];
}
