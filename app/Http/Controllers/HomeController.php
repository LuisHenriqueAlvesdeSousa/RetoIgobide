<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        if(null !== session("email")){
            return redirect()->route('menu');
        }
        //comprobamos si recibimos parametros para realizar un login
        else{
            return redirect()->view('login');
        }
    }
    
    public function login()
    {
        if(null !== $_POST["login"] && null !== $_POST["email"] && null !== $_POST["password"]){
            if(comprobarCredenciales($_POST["email"], $_POST["password"])){
                $_SESSION["email"] = $_POST["email"];
                return redirect()->route('menu');
            }else{
                return redirect()->view("login");
            }
        }else{
                return redirect()->view("login");
        }

        function comprobarCredenciales($email, $password)
        {
            $usuarioActual = User::where('email', '=', $email)->first();
            if($usuarioActual->id() != null){
                return false;
            }else{
                $_SESSION['idUsuario'] = $usuarioActual->id();

                $validacion = Director::find($usuarioActual->id());
                if($validacion == null){
                    $validacion = Jefe::find($usuarioActual->id());
                    if($validacion == null){
                        $validacion = Tecnico::find($usuarioActual->id());
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
            }
            return true;
        }
    }
}
