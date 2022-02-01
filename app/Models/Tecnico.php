<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function equipo()
    {
        return $this->belongsTo('App\Equipo');
    }

    public function incidencias(){
        return $this->hasMany('App\Incidencia');
    }
}
