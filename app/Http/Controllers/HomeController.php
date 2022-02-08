<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tecnico;
use App\Models\Operador;
use App\Models\Jefe;
use App\Models\Director;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // MAIN__________________________________________________

        session_start();
        
        //si el usuario ya se ha logeado vamos directamente a menu
        if(empty($_SESSION["email"])){
             return view('login');
        }
        //comprobamos si recibimos parametros para realizar un login
        else{
            return view('menujefe');
        }
    }
    
    public function login()
    {
        if(null !== $_POST["email"] && null !== $_POST["password"])
        {
            $usuarioActual = User::where('email', '=', $_POST["email"])->first();
            if(empty($usuarioActual))
            {
                return view('login');
            }else{
                if($usuarioActual->password == $_POST['password'])
                {
                    $_SESSION['idUsuario'] = $usuarioActual->id;
                    $_SESSION["email"] = $_POST["email"];

                    $validacion = Director::where('user_id', '=', $usuarioActual->id);
                    if($validacion == null){
                        $validacion = Jefe::where('user_id', '=', $usuarioActual->id);
                        if($validacion == null){
                            $validacion = Tecnico::where('user_id', '=', $usuarioActual->id);
                            if($validacion == null){
                                $_SESSION['rol'] = "operador";
                            }else{
                                $_SESSION['rol'] = "tecnico";
                            }
                        }else{
                            $_SESSION['rol'] = "jefe";
                        }
                    }else{
                        $_SESSION['rol'] = "director";
                    }
                    return view('menuJefe'); 
                }else{
                    return view('login');
                }
                return view('login');
       

        
            }
        }
}
}
