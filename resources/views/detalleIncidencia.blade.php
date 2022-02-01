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
            width: 100%;
            height: auto;
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

        .manOpc2{
            height: 350px;
        }

        .manOpc3{
            height: 120px;
        }

        .manOpc4{
            height: 150px;
            background: none;
            border: solid 0.5px gainsboro;
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

    <div class="maindetalleIncidencia">
        <ul>
            <li><div class="manOpc">Detalle Incidencia</div></li>
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
            <li><div class="manOpc manOpc4">Lista de Comentarios</div></li>
        </ul>
    </div>
    
</body>
</html>
