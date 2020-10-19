<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntosRecolector extends Model
{
    protected $table = "puntosreciclaje_recolectores";
    protected $fillable = ['puntosreciclaje_id', 'recolectores_id'];
}
