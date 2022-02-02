<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>
    <style>
        *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .mainIncidencia{
            width: 100%;
            height: auto;
        }

        .title{
            text-align: center;
            padding: 2% 0 0 0;
            margin-bottom: 0;
            font-size: 1.4pc;
            font-weight: bold;
        }

        .mainIncidencia ul{
            list-style: none;
            margin: 0;
            padding: 0%;
        }

        .mainIncidencia li{
            margin: 1.5% 0 3.5% 0;
        }

        .opcIncidencia{
            width: 100%;
            height: 200px;
            border-radius: 0.4em;
            box-shadow: 0px 0px 2px grey;
            position: relative;
        }

        .opcIncidencia p{
            margin-left: 3%;
        }

        .urgente{
            background: linear-gradient(rgb(255, 113, 113), rgb(223, 84, 84));
        }

        .prioritaria{
            background: linear-gradient(rgb(253, 158, 94),rgb(247, 139, 68));
        }

        .noPrioritaria{
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
        }

        .nIncidencias{
            position: absolute;
            bottom: 0%;
        }

        .ver{
            position: absolute;
            bottom: 8%;
            right: 4%;
        }

        .opcIncidencia2{
            height: 80px;
            width: 100%;
            background: linear-gradient(rgb(164, 228, 122), rgb(148, 202, 111));
            border-radius: 0.4em;
            margin: 5% 0 4%;
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 2px grey;
            position: relative;
        
        }

        .opcIncidencia2 > svg{
            margin: 0 2%;
        }
    </style>
</head>
<body>

    @include('header')
    
    <div class="mainIncidencia">
        <p class="title">Apartado Incidencias</p>

        <ul>
            <li>
                <div class="opcIncidencia urgente" onclick="location.href='./detalleIncidencia'">
                    <p>Incidencias Urgentes</p><br>
                    <p class="nIncidencias">Nº Incidencias: 8</p>
                    <svg class="ver" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                </div>
            </li>
            <li>
                <div class="opcIncidencia prioritaria">
                    <p>Incidencias Prioritarias</p><br>
                    <p class="nIncidencias">Nº Incidencias: 8</p>
                    <svg class="ver" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                </div>
            </li>

            <li>
                <div class="opcIncidencia noPrioritaria">
                    <p>Incidencias Prioritarias</p><br>
                    <p class="nIncidencias">Nº Incidencias: 8</p>
                    <svg class="ver" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                </div>
            </li>
        </ul>
    </div>

    <div class="opcIncidencia2" onclick="location.href='./nuevaIncidencia'">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
          </svg>
        Nueva Incidencia
    </div>

</body>
</html>
