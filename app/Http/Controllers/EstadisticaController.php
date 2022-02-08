<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EstadisticaExport;
use DateTime;
class EstadisticaController extends Controller
{

    public function EstadisticaExport()
    {       
            //generar Excel
            return Excel::download(new EstadisticaExport(), 'estadisticas.xlsx');

    }
}
