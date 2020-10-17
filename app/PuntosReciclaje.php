<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntosReciclaje extends Model
{
    protected $table = "puntos_reciclaje";
    protected $fillable = ['tipo_basura', 'direccion', 'horario_apertura', 'horario_cierre'];

    public function recolectores()
    {
        return $this->belongsToMany(Recolector::class);
    }
}
