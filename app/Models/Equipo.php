<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codPostal',
        'localidad',
    ];

    public function tecnicos()
    {
        return $this->hasMany('App\Tecnico');
    }

    public function jefe()
    {
        return $this->hasOne('App\Jefe');
    }
}
