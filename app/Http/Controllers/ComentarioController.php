<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioFormRequest;
use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
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
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    public function store(ComentarioFormRequest $request)
    {
        $comentario = new Comentario();
        $comentario->informacion->$request->get('info');
        $comentario->fechaInicio-> DateTime('today')->format('dd-mm-yyyy');
        $comentario->idTecnico->$request->get('idTecnico');
        $comentario->idIncidencia->$request->get('idIncidencia');

        $comentario->save();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
