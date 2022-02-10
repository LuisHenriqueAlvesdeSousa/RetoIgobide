<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;
use \App\Http\Requests\IncidenciaFormRequest;


class IncidenciaController extends Controller
{

    public function index()
    {
        return view('incidencias');
    }

    public function create($id)
    {
        return view('incidenciaCreate');
    }

    public function show($id)
    {
        return view('detalleIncidencia');
    }

    public function edit($id)
    {
        return view('incidenciaCreate');
    }

    public function update(Request $request, $id)
    {
        $incidencia = Incidencia::findOrFail($id);

        $incidencia->idTecnico->$request->get('idTecnico');

        $incidencia->save();
    }

    public function destroy($id)
    {
        $incidenciaEliminar = Incidencia::findOrFail($id);
        $incidenciaEliminar->delete();
    }

    public function store(Request $request)
    {
        
        $incidencia = new Incidencia;
        $incidencia->cliente=$request->get('nombre');
        $incidencia->fechaInicio= date('dd-mm-yyyy');
        $incidencia->fechaFin =null;
        $incidencia->email=$request->get('email');
        $incidencia->descripcion=$request->get('comentario');
        $incidencia->urgencia=$request->get('urgencia');
        $incidencia->averia=$request->get('averia');
        $incidencia->idOperario=null;
        $incidencia->idTecnico=null;
        $incidencia->idAscensor=$request->get('idAscensor');
        
        
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
    
            $incidencia->save();
            return redirect('/incidencia/create')->with('status', 'Nuevo usuario creado correctamente.');
        
        
    }
    

}
