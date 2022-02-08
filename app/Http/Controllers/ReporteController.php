<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReporteExport;
use Illuminate\Http\Request;
use DateTime;

class ReporteController extends Controller
{
    public function ReporteExport()
    {       
            return Excel::download(new ReporteExport($fchInicio, $fchFin), 'reporte.xlsx');
        
    }
}
