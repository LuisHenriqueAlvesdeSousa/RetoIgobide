<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        #header{
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .header{
            height: 60px;
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            border-radius: 0.4em;
            box-shadow: 0px 0px 2px grey;
            display: flex;
            justify-content: center;
            align-items: center;
            margin:2%;
        }

        #menu{
            width: 18.5%;
            border: none;
        }

        /*#menu:active{
            background: linear-gradient(rgb(160, 187, 209), rgb(105, 128, 158));
        }*/

        #logo{
            width: 58.5%;
        }

        #salir{
            width: 18.5%;
        }

        #menuOculto{
            height: 100vh;
            background-color: lightsteelblue;
            z-index: 1;
            margin: 0%;
            position: absolute;
            width: 100%;
            animation-name: muestraMenu;
            animation-duration: 1s;
            display: none;
        }

        #salirMenuOculto{
            height: 42px;
            width: 10%;
            margin: 2%;
            overflow: hidden;
            position: absolute;
        }

        #exit{
            position: relative;
        }



        @keyframes muestraMenu {
            0%{
                width: 0%;
            }

            100%{
                width: 100%;
            }
        }

        @keyframes ocultaMenu{
            0%{
                width: 100%;
            }

            100%{
                width: 0%;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="menuOculto">
        <div id="salirMenuOculto">
            <svg id="exit" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
            </svg>
        </div>
    </div>
    <div id="header">
        <button id="menu" class="header">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <div id="logo" class="header">LOGO</div>
        <div id="salir" class="header">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
        </div>
    </div>

    <script>
        //Si selecciono el icono del menu, mostrar el hiddenMenu
        document.getElementById("menu").addEventListener('click',function(){
            document.getElementById("menuOculto").style.width="100%"; //En caso de que el width sea 0
            document.getElementById("menuOculto").style.display = "block";
            document.getElementById("menuOculto").style.animationName="muestraMenu";
            document.getElementById("menuOculto").style.animationPlayState="running";
        });

        document.getElementById("salirMenuOculto").addEventListener('click',function(){
            document.getElementById("menuOculto").style.animationName="ocultaMenu";
            document.getElementById("menuOculto").style.animationPlayState="running";
            document.getElementById("menuOculto").style.width="0%";
        });

        //Cuando selecciona el boton de cerrar sesion
        document.getElementById("salir").addEventListener('click',function(){
            Swal.fire({
                title: '¿Cerrar sesion?',
                text: "Se cerrará la sesión para (NombreUsuario)",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Cerrar Sesión',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {//No es necesario, se puede borrar
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
            });
        });
    </script>
  
</body>
</html>
