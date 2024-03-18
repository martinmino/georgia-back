<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercado extends Model
{
    protected $table = 'mercados';

    protected $fillable = [
        'codigo',
        'nombre'
    ];
}
