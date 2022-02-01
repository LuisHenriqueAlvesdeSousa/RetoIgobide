<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jefe extends Model
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
}
