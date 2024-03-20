<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Manguera extends Model
{
    protected $table = 'mangueras';

    protected $fillable = [
        'fabricacion',
        'ph',
        'largo_id',
        'diametro_id',
        'puesto',
        'baja_motivo_id',
        'observaciones'
    ];

    public function largo(): BelongsTo
    {
        return $this->belongsTo(Largo::class);
    }
    public function diametro(): BelongsTo
    {
        return $this->belongsTo(Diametro::class);
    }
    public function bajaMotivo(): BelongsTo
    {
        return $this->belongsTo(BajaMotivo::class);
    }

}
