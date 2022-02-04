<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Jefe;
use \App\Models\Tecnico;
use \App\Models\Director;
define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

// MAIN__________________________________________________

session_start();

//si el usuario ya se ha logeado vamos directamente a menu
if(isset(session("email"))){
    return redirect()->route('menu');
}
//comprobamos si recibimos parametros para realizar un login
elseif(isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["password"])){
    if(comprobarCredenciales($_POST["email"], $_POST["password"])){
        $_SESSION["email"] = $_POST["email"];
        return redirect()->route('menu');
    }else{
        include_once "login.blade.php";
    }
}else{
    include_once "login.blade.php";
}

function comprobarCredenciales($email, $password){
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