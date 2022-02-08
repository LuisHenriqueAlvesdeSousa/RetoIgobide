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
        if(isset($_POST['fchInicio']) && isset($_POST['fchFin'])){
            //validaciones
            $fchInicio = New DateTime($_POST['fchInicio'])/*->format('dd-mm-yyyy')*/;
            $fchFin = New DateTime($_POST['fchFin'])/*->format('dd-mm-yyyy')*/;
    
            $fchControl = New DateTime('02-02-2022')/*->format('dd-mm-yyyy')*/;
            $fchHoy = New DateTime('now')/*->format('dd-mm-yyyy')*/;
            
            if($fchInicio > $fchFin) return redirect('/export/reportes/create')->with('status', 'La fecha de Inicio es mayor que la fecha Final.');
    
            if($fchInicio < $fchControl) $fchInicio = $fchControl;
    
            if($fchFin > $fchHoy) $fchFin = $fchHoy;
    
            //generar Excel
            return Excel::download(new ReporteExport($fchInicio, $fchFin), 'reporte.xlsx');
    
        }
    }
}
