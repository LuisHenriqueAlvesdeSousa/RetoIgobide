<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ascensor extends Model
{
    use HasFactory;

    public function manual(){
        return $this->hasOne('App\Manual');
    }

    public function incidencia(){
        return $this->hasMany('App\Incidencia');
    }

    protected $fillable = [
        'direccion',
        'modelo',
        'capacidad',
        'peso',
        'paradas',
        'recorrido',
    ];
}
