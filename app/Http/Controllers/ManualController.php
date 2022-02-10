<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Http\Requests\ManualFormRequest;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manuales');
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
     * @param  \App\Models\Manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function show(Manual $manual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function edit(Manual $manual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manual $manual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manualEliminar = Manual::findOrFail($id);
        $manualEliminar->steps->each->delete();
        $manualEliminar->delete();
    }

    public function store(Request $request){
        $path = $request->file('archivo')->store('public');
        
        $manual = new Manual;
        $manual->ruta->$path;
        $manual->idAscensor->$request->get('idAscensor');

        $manual->save();
    }
    
    public function buscarManual($search){
        $search = $search;
        $manuales = DB::table('ascensors')
                ->select('*')
                ->join('manuals', 'manuals.id', '=', 'ascensors.manual_id')
                ->where('ascensors.modelo', 'LIKE', '%'.$search.'%')
                ->get();
        
        return View('/manuales')
            ->with('manuales', $manuales)
            ->with('search', $search);
    }
}
