<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Vendedor extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [
        'codigo',
        'nombre',
        'email',
        'activo'
    ];

    public function clientes(): HasMany
    {
        return $this->hasMany(Cliente::class);
    }

}
