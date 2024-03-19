<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    protected $fillable = [
        'cliente_id',
        'codigo',
        'sucursal',
        'descripcion',
        'calle',
        'altura',
        'calle_id',
        'ciudad',
        'provincia_id',
        'telefono',
        'encargado',
        'encargado_telefono',
        'lunes',
        'martes',
        'miercoles',
        'jueves',
        'viernes',
        'sabado',
        'domingo',
        'hora_manana_desde',
        'hora_manana_hasta',
        'hora_tarde_desde',
        'hora_tarde_hasta',
        'activo'
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
    public function parque(): HasMany
    {
        return $this->hasMany(Parque::class);
    }
    public function provincia(): HasOne
    {
        return $this->hasOne(Provincia::class, 'provincia_id', 'id');
    }
}
