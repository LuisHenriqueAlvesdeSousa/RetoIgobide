<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function store(UserFormRequest $request)
{
    $user = new User(array(
        'rol' => $request->get('rol'),
        'name' => $request->get('nombre'), 
        'dni' => $request->get('dni'), 
        'fechaNac' => $request->get('fchNacimiento'), 
        'telefono' => $request->get('telefono'), 
        'password' => $request->get('password'), 
        'email' => $request->get('email')
    ));

    function validar($user){
        $patron_text = '/[A-Za-z0-9_]/';
        $patron_dni = '/[0-9]{7,8}[A-Z]/';
        $patron_telefono = '/[0-9]{9}';
        
        if(!trim($user->rol ='')){
            return redirect('/user/create')->with('status', 'Tipo de usuario vacío.');
        }

        if(!trim($user->name ='')){
            return redirect('/user/create')->with('status', 'Nombre vacío.');
        }else{
            if(!preg_match($patron_text, $user->name)){
                return redirect('/user/create')->with('status', 'Formato del nombre incorrecto, se acepta carácteres alfanuméricos.');
            }
        }

        if(!trim($user->dni ='')){
            return redirect('/user/create')->with('status', 'DNI vacío.');
        }else{
            if(!preg_match($patron_dni, $user->dni)){
                return redirect('/user/create')->with('status', 'Formato del DNI incorrecto, Ejemplo: 87654321A');
            }
        }

        if(!trim($user->fechaNac ='')){
            return redirect('/user/create')->with('status', 'Fecha de nacimiento vacía.');
        }

        if(!trim($user->telefono ='')){
            return redirect('/user/create')->with('status', 'Teléfono vacío.');
        }else{
            if(!preg_match($patron_telefono, $user->telefono)){
                return redirect('/user/create')->with('status', 'Formato del teléfono incorrecto, Ejemplo: 612345678 o 912345678.');
            }
        }

        if(!trim($user->password ='')){
            return redirect('/user/create')->with('status', 'Debe introducir una contraseña.');
        }

        return true;
    }

    if(validar($user)){
        $user->save();
        switch ($user->rol) {
            case 'tecnico':
                            if(!trim($request->get('equipo') =='')){
                                return redirect('/user/create')->with('status', 'Seleccione un equipo por favor.');
                            }
                            $tecnico = new Tecnico(array(
                                'idUsuario' => $user->id,
                                'idEquipo' => $$request->get('equipo')
                            ));
                            $tecnico->save();
                            break;
            case 'jefe':
                            if(!trim($request->get('equipo') =='')){
                                return redirect('/user/create')->with('status', 'Seleccione un equipo por favor.');
                            }
                            $jefe = new Jefe(array(
                                'idUsuario' => $user->id,
                                'idEquipo' => $$request->get('equipo')
                            ));
                            $jefe->save();
                            break;
            case 'operador':
                            $operador = new Operador(array(
                                'idUsuario' => $user->id,
                            ));
                            $operador->save();
                            break;
            case 'director':
                            $director = new Operador(array(
                                'idUsuario' => $user->id,
                            ));
                            $director->save();
                break;
                                    
            default:
                return redirect('/user/create')->with('status', 'Seleccione uno de los roles por favor.');
                break;
        }
        return redirect('/user/create')->with('status', 'Nuevo usuario creado correctamente.');
    }

    
}





    public function create($listaEquipos)
    {

    }


}
