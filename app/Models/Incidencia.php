<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente',
        'fechaInicio',
        'fechaFin',
        'email',
        'descripcion',
        'urgencia',
        'averia',
    ];

    public function ascensor(){
        return $this->belongsTo('App\Ascensor');
    }

    public function tecnico(){
        return $this->belongsTo('App\Tecnico');
    }

    public function operador(){
        return $this->belongsTo('App\Operador');
    }
}
