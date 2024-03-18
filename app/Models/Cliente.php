<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'codigo',
        'nombre',
        'pagador_id',
        'activo',
        'abonado',
        'vendedor_id',
        'condicion_id',
        'mercado_id',
        'parque'
    ];

    public function pagador(): HasOne
    {
        return $this->hasOne(Cliente::class, 'id', 'pagador_id');
    }
    public function vendedor(): BelongsTo
    {
        return $this->belongsTo(Vendedor::class);
    }
    public function condicion(): BelongsTo
    {
        return $this->belongsTo(Condicion::class);
    }
    public function mercado(): BelongsTo
    {
        return $this->belongsTo(Mercado::class);
    }
    public function sucursales(): HasMany
    {
        return $this->hasMany(Sucursal::class);
    }

}
