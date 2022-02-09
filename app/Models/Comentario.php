<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'informacion',
        'fechaActu',
    ];

    public function incidencia(){
        return $this->belongsTo('App\Incidencia');
    }

    public function tecnico(){
        return $this->belongsTo('App\Tecnico');
    }
}
