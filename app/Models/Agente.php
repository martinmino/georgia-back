<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agente extends Model
{
    protected $table = 'agentes';

    protected $fillable = [
        'nombre',
        'agc',
        'iram'
    ];

    public function extintores(): HasMany
    {
        return $this->hasMany(Extintor::class);
    }
}
