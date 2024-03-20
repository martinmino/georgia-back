<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Extintor extends Model
{
    protected $table = 'extintores';

    protected $fillable = [
        'cilindro',
        'fabricacion',
        'recarga',
        'ph',
        'agente_id',
        'capacidad_id'
    ];

    public function parque(): BelongsTo
    {
        return $this->belongsTo(Parque::class);
    }
    public function agente(): BelongsTo
    {
        return $this->belongsTo(Agente::class);
    }
    public function capacidad(): BelongsTo
    {
        return $this->belongsTo(Capacidad::class);
    }

}
