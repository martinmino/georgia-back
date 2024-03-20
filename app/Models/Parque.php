<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Parque extends Model
{
    protected $table = 'parques';

    protected $fillable = [
        'codigo',
        'cliente_id',
        'sucursal_id',
        'activo',
        'sistema_id'
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
    public function sucursal(): BelongsTo
    {
        return $this->belongsTo(sucursal::class);
    }
    /**
     * Get the extintor associated with the Parque
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function extintor(): HasOne
    {
        return $this->hasOne(Extintor::class, 'id', 'id');
    }
    /**
     * Get the manguera associated with the Parque
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function manguera(): HasOne
    {
        return $this->hasOne(Manguera::class, 'id', 'id');
    }
}
