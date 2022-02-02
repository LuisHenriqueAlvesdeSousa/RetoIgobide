<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencia $incidencia)
    {
        //
    }

    public function store(IncidenciaFormRequest $request)
{
    /*
    $incidencia = new Incidencia(array(
        'cliente' => $request->get('nombre'), 
        'fechaInicio' => new DateTime('today')->format('dd-mm-yyyy'), 
        'email' => $request->get('email'),
        'descripcion' => $request->get('comentario'), 
        'urgencia' => $request->get('urgencia'),
        'averia' => $request->get('tipoAveria'),
        "idOperario" => null,
        "idTecnico" => null,
        'idAscensor' => $request->get('idAscensor')
    ));
    */

    $incidencia = new Incidencia;
    $incidencia->cliente->$request->get('nombre');
    $incidencia->fechaInicio-> DateTime('today')->format('dd-mm-yyyy');
    $incidencia->fechaFin->null;
    $incidencia->email->$request->get('email');
    $incidencia->descripcion->$request->get('comentario');
    $incidencia->urgencia->$request->get('urgencia');
    $incidencia->averia->$request->get('averia');
    $incidencia->idOperario->null;
    $incidencia->idTecnico->null;
    $incidencia->idAscensor->$request->get('idAscensor');

    if(validar($incidencia)){
        $incidencia->save();
        return redirect('/incidencia/create')->with('status', 'Nuevo usuario creado correctamente.');
    }
    
}

    function validar($incidencia){
        $patron_text = '/[A-Za-z0-9_]/';

        if(!trim($incidencia->nombreCliente ='')){
            return redirect('/incidencia/create')->with('status', 'Nombre vacío.');
        }else{
            if(!preg_match($patron_text, $incidencia->nombreCliente)){
                return redirect('/incidencia/create')->with('status', 'Formato del nombre incorrecto, se acepta carácteres alfanuméricos.');
            }
        }

        if(!trim($incidencia->descripcion ='')){
            return redirect('/incidencia/create')->with('status', 'Comentario vacío.');
        }

        if(!trim($incidencia->urgencia ='')){
            return redirect('/incidencia/create')->with('status', 'Seleccione por favor el nivel de urgencia.');
        }

        if(!trim($incidencia->tipoAveria ='')){
            return redirect('/incidencia/create')->with('status', 'Seleccione por favor el tipo de averia.');
        }

        if(!trim($incidencia->idAscensor ='')){
            return redirect('/incidencia/create')->with('status', 'ID ascensor vacío.');
        }

        return true;
    }
}
