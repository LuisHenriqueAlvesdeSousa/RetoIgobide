<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Director</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        
        #listadoDirector{
            list-style: none;
            padding: 0;
        }

        #listadoDirector li{
            padding: 0%;
            margin: 0%;
        }

        .opcDirector{
            height: 90px;
            width: 100%;
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            border-radius: 0.4em;
            margin: 2% 0;
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 2px grey;
            position: relative;
        }
        
        .opcDirector:hover{
            cursor:pointer;
        }

        .info{
            background-color: red;
            height: 1.6em;
            width: 1.6em;
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

        .mainHome{
            width: 96%;
            height: auto;
            margin: 3% 2% 1% 2%;
        }

        @media (min-width:900px){
            .opcDirector{
                height: 175px;
            }
        }

    </style>
</head>
<body>
 <div class="mainHome">
        <div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <ul id="listadoDirector">
                        <li>
                            <div class="opcDirector" onclick="location.href='./incidencias'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 15 20">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                </svg>
                                Listado Incidencias
                            </div>
                        </li>
                        <li class="d-lg-none" >
                            <div class="opcDirector" onclick="location.href='./listadoTecnicos'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-wrench-adjustable-cricle" viewBox="0 0 15 20">
                                    <path fill-rule="evenodd" d="M15 8a7 7 0 0 1-10.253 6.2l1.658-1.99a4.49 4.49 0 0 0 1.592.29c.652 0 1.273-.139 1.833-.39L8.497 9l-1-2.5 3.826-1.53a4.5 4.5 0 0 0-7.537 4.623l-1.988 1.656A7 7 0 1 1 15 8Zm1 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-3.504 0a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Zm-5.791.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                                </svg>
                                Listado Tecnicos
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 15 20">
                                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                                </svg>
                                Listado Operarios
                            </div>
                        </li>
                        <li class="d-lg-none">
                            <div class="opcDirector" onclick="location.href='./listadoJefeEquipo'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 15 20">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Listado Jefe Equipos
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./reportes'">
                                <div class="info">3</div>
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 15 20">
                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg>
                                Leer Reportes
                            </div>
                        </li>
                        <li class="d-lg-none">
                            <div class="opcDirector" onclick="location.href='./manuales'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book" viewBox="0 0 15 20">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                </svg>
                                Manuales
                            </div>
                        </li>
                        <li><div class="opcDirector">
                                <div class="info">1</div>
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 15 20">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Historial
                            </div>
                        </li>
                        <li class="d-lg-none">
                            <div class="opcDirector">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 15 20">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                                </svg>
                                Estadisticas
                            </div>
                        </li>
                    </ul>
                </div>
    
                <!--Columna extra para las versiones lg y xl-->
                <div class="d-none d-lg-block d-xl-block col-lg-6 col-xl-6">
                    <ul id="listadoDirector">  
                        <li>
                            <div class="opcDirector" onclick="location.href='./listadoTecnicos'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-wrench-adjustable-cricle" viewBox="0 0 15 20">
                                    <path fill-rule="evenodd" d="M15 8a7 7 0 0 1-10.253 6.2l1.658-1.99a4.49 4.49 0 0 0 1.592.29c.652 0 1.273-.139 1.833-.39L8.497 9l-1-2.5 3.826-1.53a4.5 4.5 0 0 0-7.537 4.623l-1.988 1.656A7 7 0 1 1 15 8Zm1 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-3.504 0a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Zm-5.791.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                                </svg>
                                Listado Tecnicos
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./listadoJefeEquipo'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 15 20">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Listado Jefe Equipos
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector" onclick="location.href='./manuales'">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book" viewBox="0 0 15 20">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                </svg>
                                Manuales
                            </div>
                        </li>
                        <li>
                            <div class="opcDirector">
                                <svg class="w-50 h-50 w-lg-100 h-lg-100 w-xl-100 h-xl-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 15 20">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                                </svg>
                                Estadisticas
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
