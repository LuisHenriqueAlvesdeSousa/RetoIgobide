<?php

namespace App\Http\Controllers;

use App\Models\Estadistica;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EstadisticaExport;
class EstadisticaController extends Controller
{

    public function EstadisticaExport()
    {       
        if(isset($_POST['fchInicio']) && isset($_POST['fchFin'])){
            //validaciones
            $fchInicio = New DateTime($_POST['fchInicio'])/*->format('dd-mm-yyyy')*/;
            $fchFin = New DateTime($_POST['fchFin'])/*->format('dd-mm-yyyy')*/;
    
            $fchControl = New DateTime('02-02-2022')/*->format('dd-mm-yyyy')*/;
            $fchHoy = New DateTime('now')/*->format('dd-mm-yyyy')*/;
            
            if($fchInicio > $fchFin) return redirect('/estadisticas/create')->with('status', 'La fecha de Inicio es mayor que la fecha Final.');
    
            if($fchInicio < $fchControl) $fchInicio = $fchControl;
    
            if($fchFin > $fchHoy) $fchFin = $fchHoy;
    
            //generar Excel
            return Excel::download(new EstadisticaExport($fchInicio, $fchFin), 'estadisticas.xlsx');
    
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estadistica  $estadistica
     * @return \Illuminate\Http\Response
     */
    public function show(Estadistica $estadistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estadistica  $estadistica
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadistica $estadistica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estadistica  $estadistica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadistica $estadistica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estadistica  $estadistica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadistica $estadistica)
    {
        //
    }
}
