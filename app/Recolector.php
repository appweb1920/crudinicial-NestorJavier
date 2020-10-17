<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recolector extends Model
{
    protected $table = "recolectores";
    protected $fillable = ['nombre', 'dias_recoleccion'];

    public function puntosReciclaje()
    {
        return $this->belongsToMany(PuntosReciclaje::class);
    }
}
