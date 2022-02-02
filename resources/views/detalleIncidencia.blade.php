<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Incidencia</title>
    <style>
        *{
            font-size: 1.35pc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .maindetalleIncidencia{
            width: 96%;
            height: auto;
            margin: 0 2%
        }

        .maindetalleIncidencia ul{
            list-style: none;
            margin: 0;
            padding: 0%;
        }

        .maindetalleIncidencia li{
            margin: 2% 0;
        }

        .manOpc{
            width: 100%;
            height: 70px;
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            border-radius: 0.4em;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            box-shadow: 0px 0px 2px grey;
        }
        
        .title{
            width: 100%;
            height: auto;
            padding: 1.5% 0;
            border-radius: 0.4em;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        
        .title > nav{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .title ol{
            margin:0;
        }

        .manOpc2{
            height: 350px;
        }

        .manOpc3{
            height: 120px;
        }

        .manOpc4{
            height: 190px;
            background: none;
            border: solid 0.5px gainsboro;
            overflow-y: scroll;
            justify-content: flex-start;
        }

        #lcomentarios{
            padding: 0;
            margin: 0;
            height: 100%;
        }

        /*Mapas*/
        #map {
            height: 100%;
            width: 100%;
        }

        .custom-map-control-button {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            height: 40px;
            cursor: pointer;
        }
        .custom-map-control-button:hover {
            background: #ebebeb;
        }

        #addComent{
            background: linear-gradient(rgb(164, 228, 122), rgb(148, 202, 111));
        }

        #addComent:hover{
            cursor: pointer;
        }

        #addComent > svg{
            margin: 0 2%;
        }

        #comentario{
            display: flex;
            flex-direction: column;
        }

        .comentarioStyle{
            background-color: rgb(245, 245, 245);
            height: auto;
            width: 98%;
            border-radius: 0 0.75em 0.75em 0.75em;
        }

        #comentario > textarea{
            width: 100%;
        }
        
        #enviar{
            background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
            height: auto;
            width: fit-content;
            padding: 1% 2%;
            display: flex;
            align-items: center;
            justify-content: center;
            align-self: flex-end;
            margin: 0.5em 0 0 0;
        }

        #enviar:hover{
            cursor:pointer;
        }

        #enviar > svg{
            margin: 0 2%;
        }
    </style>

    <!--Mapas-->
    <script>
        let map, infoWindow;
        function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 40.1586764, lng: -5.6814445 },
            zoom: 6.8,
        });
        infoWindow = new google.maps.InfoWindow();

        const locationButton = document.createElement("button");

        locationButton.textContent = "Ir a mi ubicacion actual";
        locationButton.classList.add("custom-map-control-button");
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
        locationButton.addEventListener("click", () => {
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };

                infoWindow.setPosition(pos);
                //infoWindow.setContent("Ubicacion encontrada");
                //infoWindow.open(map);
                map.setCenter(pos);
                },
                () => {
                handleLocationError(true, infoWindow, map.getCenter());
                }
            );
            } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
            }
        });
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
            browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
        }
    </script>
</head>
<body>

    @include('header')

     <div class="maindetalleIncidencia">
        <ul>
            <li>
                <div class="title">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </li>
                         <li class="breadcrumb-item">Incidencias</li>
                        <li class="breadcrumb-item active" aria-current="page">Detalle Incidencia</li>
                      </ol>
                    </nav>
                </div>
            </li>
            <li><div class="manOpc manOpc2">
                <div id="map"></div>
                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                <script
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALUqJpjrUqrUZaDmf5akxGk01EeU-1Do0&callback=initMap&v=weekly"
                  async
                ></script>
            </div></li>
            <li><div class="manOpc manOpc3">Descripcion</div></li>
            <li><div class="manOpc">Detalles</div></li>
            <li><div id="manOpc4" class="manOpc manOpc4">
                <!--Cargar los comentarios-->
                <ul id="lcomentarios"></ul>
            </div></li>
        </ul>
        
    <div id="addComent" class="manOpc">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
            <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
          </svg>
        Añadir comentario
    </div>
    <div id="comentario" style="display: none; height: auto;">
        <textarea class="form-control" maxlength="150" rows="2" placeholder="Escribe aqui tu comentario"></textarea>
        <!--Añadir comentario-->
        <div id="enviar">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
              </svg> Enviar
        </div>
    </div>
    </div>

     <script>
        $("#addComent").click(function(){
            $("#comentario").slideToggle("slow");
        })

        //Ejemplo de muestra de comenetarios
        var comentarios = ["Incidencia en proceso",
        "Arreglo de los botones de cerrar puertas",
        "Hello World",
        "Comentario de ejemplo para el proyecto del reto 3 de Desarrollo de Aplicaciones Web",
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "Es práctica común en los medios de comunicación utilizar textos falsos en sus plantillas y maquetas",
        "Comentario de ejemplo",
        "Ultimo comentario"];

        var nombreUsuario="Carlos";

        //Calcula fecha actual formateada
        function calculaFecha() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
    
            var yyyy = today.getFullYear();
            if (dd < 10) {dd = '0' + dd;}
            if (mm < 10) {mm = '0' + mm;}
            var today = dd + '/' + mm + '/' + yyyy;

            return today;
        }

        comentarios.forEach(element => {
            var comentario = document.createElement("li");
            var textoComentario = document.createTextNode(element);
            
            /*Añadir Nombre del usuario que comenta*/
            var usuarioComentario = document.createElement("a");
            var fecha = calculaFecha()//Fecha Actual
            var usuarioComentarioTexto = document.createTextNode(`  (${nombreUsuario}) ${fecha}`);
            usuarioComentario.appendChild(usuarioComentarioTexto);
            const attr =document.createAttribute("style");
            attr.value="font-style: italic;color:steelblue;";
            usuarioComentario.setAttributeNode(attr);
            /*-------------------------*/
            comentario.appendChild(textoComentario);
            comentario.appendChild(usuarioComentario);//Añade el nombre de usuario
            comentario.classList.add("comentarioStyle");//Añade estilos a cada comentario
            var listaComentarios = document.getElementById("lcomentarios");
            listaComentarios.appendChild(comentario);
        });

        //Muestra los ultimos comentarios (scrollbar en el bottom)
        var objDiv = document.getElementById("manOpc4");
        objDiv.scrollTop = objDiv.scrollHeight;
    </script>
    
</body>
</html>
