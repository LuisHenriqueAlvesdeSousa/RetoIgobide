<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Tecnico</title>
    <style>
        * {
            font-size: 1.2pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .newOperario {
            width: 100%;
            height: auto;
        }
        
        .newOperario ul {
            list-style: none;
            padding: 0;
            margin-top: 2%;
        }
        
        .newOperario li {
            margin: 4% 0;
        }
        
        .opNewOperario {
            border: none;
            width: 100%;
            height: 70px;
            border-radius: 0.4em;
            display: flex;
            justify-content: center;
            align-items: center;
            border: solid 0.5px gainsboro;
            overflow: auto;
        }
        
        .opNewOperario2 {
            width: 95%;
            margin: 2% auto;
        }
        
        .opNewOperario2 a {
            color: grey;
            font-weight: 500;
        }
        
        #controles {
            display: flex;
            bottom: 0.5px;
            justify-content: space-around;
        }
        
        .botControl {
            width: 45%;
            height: 50px;
            border: none;
            outline: none;
            border-radius: 0.4em;
        }
        
        #guardar {
            background: linear-gradient(rgb(182, 255, 175), rgb(145, 223, 151));
        }
    </style>
    <script src="./sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>

    <!--
        falta pasar a blade.php
        falta testear.


        @section('content')
        @if (session('status')) 
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    -->

    <div class="newOperario">
        <form method="post">
            <!--
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error}}</p><br>
                @endforeach
                {!! csrf_field() !!}
            -->
            <p class="alert alert-danger" id="error"></p><br>

            <ul>
                <li>
                    <div class="opNewOperario" style="background: linear-gradient(rgb(214, 231, 245), lightsteelblue);">Crear Nuevo Tecnico</div>
                </li>
                <li>
                    <div class="opNewOperario2">
                        <a>Tipo de usuario:*</a>
                        <select class="opNewOperario" id="rol" name="rol">
                            <option value=''></option>
                            <option value='tecnico'>Técnico</option>
                            <option value='operador'>Operador</option>
                            <option value='jefe'>Jefe</option>
                            <option value='director'>Director</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="opNewOperario2">
                        <a>Nombre*</a>
                        <input type="text" class="opNewOperario" id="nombre" name="nombre">
                    </div>
                </li>
                <li>
                    <div class="opNewOperario2">
                        <a>DNI*</a>
                        <input type="text" class="opNewOperario" id="dni" name="dni">
                    </div>
                </li>
                <li>
                    <div class="opNewOperario2">
                        <a>Fecha Nacimiento*</a>
                        <input type="date" class="opNewOperario" id="fchNacimiento" name="fchNacimiento">
                    </div>
                </li>
                <li>
                    <div class="opNewOperario2">
                        <a>Telefono*</a>
                        <input type="text" class="opNewOperario" id="telefono" name="telefono" placeholder="612345678 o 912345678">
                    </div>
                </li>
                <li>
                    <div class="opNewOperario2">
                        <a>Email Corporativo*</a>
                        <input type="email" class="opNewOperario" id="email" name="email" placeholder="nombre@igobide.org">
                    </div>
                </li>

                <li>
                    <div class="opNewOperario2">
                        <a>Equipo</a>
                        <select class="opNewOperario">
                            
                            <!--
                                @foreach ($listaEquipos as $equipo)
                                    <option>$equipo->getCp</option>
                                @endforeach
                            -->
                            
                        </select>
                </li>

                <li>
                    <div class="opNewOperario2">
                        <a>Contraseña*</a>
                        <input type="password" class="opNewOperario" id="password" name="password">
                </li>

                <!--CONFIRMAR CONTRASEÑA Y CONTROL DE ERRORES-->
            </ul>

            <div id="controles">
                <button type="submit" class="botControl" id="guardar">Guardar</button>
                <button class="botControl" id="cancelar">Cancelar</button>
            </div>
        </form>
        </div>
        <!--@endsection('content')-->
        <script>
            //Comprobar que todo es correcto y no hay campos vacios
            document.getElementById("guardar").addEventListener('submit', function() {
                validaciones();
                /*
                Swal.fire({
                    title: 'Crear nuevo tecnico',
                    text: "Se creará el usuario",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Crear Usuario',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) { //No es necesario, se puede borrar
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                });
                */
            });


            document.getElementById("cancelar").addEventListener('click', function() {
                Swal.fire({
                    title: 'Cancelar proceso',
                    text: "Se perderán los datos",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Salir',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) { //No es necesario, se puede borrar
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