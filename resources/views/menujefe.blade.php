<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Director</title>
    <style>
        #listadoDirector{
            list-style: none;
            padding: 0;
        }

        #listadoDirector li{
            padding: 0%;
            margin: 0%;
        }

        .opcDirector{
            height: 80px;
            width: 96%;
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            border-radius: 0.4em;
            margin: 2%;
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 2px grey;
            position: relative;
        }

        .info{
            background-color: red;
            height: 15px;
            width: 15px;
            color: white;
            padding: 2%;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            position: absolute;
            top: 6%;
            left: 2%;
            font-size: large;
        }
        
        
        .link{
            text-decoration: none;
        }

        .link:visited{
            color: inherit;
        }

    </style>
</head>
<body>
 <ul id="listadoDirector">
        <li><div class="opcDirector" onclick="location.href='./incidencias'">Listado Incidencias</div></li>
        <li><div class="opcDirector" onclick="location.href='./listadoTecnicos'">Listado Tecnicos</div></li>
        <li><div class="opcDirector">Listado Operarios</div></li>
        <li><div class="opcDirector" onclick="location.href='./listadoJefeEquipo'">Listado Jefe Equipos</div></li>
        <li>
            <div class="opcDirector" onclick="location.href='./reportes'">
                <div class="info">3</div>
                Leer Reportes
            </div>
        </li>
        <li><div class="opcDirector" onclick="location.href='./manuales'">Manuales</div></li>
        <li><div class="opcDirector">
                <div class="info">1</div>
                Historial
            </div>
        </li>
        <li><div class="opcDirector">Estadisticas</div></li>
    </ul>


</body>
</html>
