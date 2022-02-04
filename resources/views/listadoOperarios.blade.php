<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script>
         //Web component
       class Usuario extends HTMLElement{
           
            constructor(){
                super();
            }

            connectedCallback(){
                let shadowRoot = this.attachShadow({ mode: "open" });
                shadowRoot.innerHTML = `
                <style>
                    *{
                        font-size: 1.35pc;
                    }
                    ul{
                        list-style: none;
                        margin: 0;
                        padding: 0%;
                    }
                    li{
                        margin: 2% 0 2.5% 0;
                    }
                    .tecnicosOpc2{
                        width: 100%;/*Cambiar a auto despues de poner Editar y eliminar de la lista de tecnicos*/
                        height: auto;
                        margin:1% 0;
                        border-radius: 0.4em;
                        box-shadow: 0px 0px 2px grey;
                        background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
                        display: flex;
                        flex-direction: row;
                        position: relative;
                        overflow: hidden;
                        padding: 2% 0;
                    }
                    
                    .opciones li{
                        margin-bottom: 5px;
                    }

                    .imagenTecn{
                        width: auto;
                        height: auto;
                        background:rgba(255, 255, 255, 0.708) ;
                        margin-left: 2%;
                        border-radius: 0.4em;
                    }
                    .info{
                        height: 70px;
                        width: auto;
                        margin-left: 1.5%;
                    }

                    .opciones{
                        height: 100%;
                        width: auto;
                        position: absolute;
                        right: 3%;
                    }
                </style>
                <div class="tecnicosOpc2">
                    <div class="imagenTecn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4pc" height="4.1pc" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </div>
                    
                    <div class="opciones">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </li>
                        </ul>
                    </div>

                    <div class="info">
                        <ul>
                            <li>${this.getAttribute("nombre")}</li>
                            <li>${this.getAttribute("equipo")}</li>
                        </ul>
                    </div>
                </div>
                `;
            }
       }

       window.customElements.define("usuario-p", Usuario);
    </script>
</head>
<style>
    *{
        margin:0;
        padding:0;
        font-size: 1.35pc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .mainListado{
        width: 96%;
        height: auto;
        margin: 0 2%;
    }

    .mainListado ul{
        list-style: none;
        margin: 0;
        padding: 0%;
    }

    .mainListado li{
        margin: 1% 0 2% 0;
    }

    .title{
        display:flex;
        align-items:center;
        justify-content:center;
    }

    .title1{
        color: steelblue;
        font-weight: 500;
        text-decoration: none;
    }
    
    .title ol{
        margin-bottom:0;
        display: flex;
        justify-content: center;
    }

    .tecnicosOpc{
        width: 100%;
        height: 70px;
        background: linear-gradient(rgb(214, 231, 245), lightsteelblue);
        border-radius: 0.4em;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 0px 2px grey;
    }

    #creaTecnico{
        background: linear-gradient(rgb(164, 228, 122), rgb(148, 202, 111));
    }

    #creaTecnico svg{margin: 0 2%;}

    .title{
        text-align: center;
        padding: 2% 0 0 0;
        margin-bottom: 0;
    }
</style>
<body>
   @include('header')
        <div class="mainListado">
        <ul>
            <li>
                <div class="title">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 15 20">
                              <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </li>
                        <li class="breadcrumb-item">Operarios</li>
                      </ol>
                    </nav>
                </div>
            </li>
            <li><div id="creaTecnico" class="tecnicosOpc">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                Crear nuevo operario</div>
            </li>
        </ul>

        <a class="title1">Lista de Operarios</a>
            <!---->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="row">
                        <div style="height: auto;width: 100%; margin: 0 auto;">
                            <ul id="listaprueba1" style="list-style: none; padding: 0;margin: 0;">
                             <!--Añadir datos aqui-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="row">
                        <div style="height: auto;width: 100%; margin: 0 auto;">
                            <ul id="listaprueba2" style="list-style: none; padding: 0;margin: 0;">
                                <!--Añadir datos aqui-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
   
   <script>
        //Array con datos (cambiar a consulta a BD)
        var datos=[
            {nombre:"Carlos",equipo:"Equipo 1"},
            {nombre:"Luis",equipo:"Equipo 2"},
            {nombre:"Aitor",equipo:"Equipo 3"},
            {nombre:"Daniel",equipo:"Equipo 4"},
            {nombre:"Manuel",equipo:"Equipo 5"},
            {nombre:"2gdaw01",equipo:"Equipo 6"},
            {nombre:"2gdaw02",equipo:"Equipo 7"},
            {nombre:"1gdaw04",equipo:"Equipo 8"},
            {nombre:"2gdaw10",equipo:"Equipo 9"},
            {nombre:"2gdaw03",equipo:"Equipo 10"},
            {nombre:"2gdam11",equipo:"Equipo 11"},
            {nombre:"2gdaw05",equipo:"Equipo 12"},
            {nombre:"2gsmr01",equipo:"Equipo 13"},
            {nombre:"1gsmr09",equipo:"Equipo 14"},
            {nombre:"2gdaw14",equipo:"Equipo 15"},
            {nombre:"2gdam06",equipo:"Equipo 16"}
        ];
       
        for(let i=0;i<datos.length;i++){
           var elemento = document.createElement("usuario-p");
           elemento.setAttribute("nombre",datos[i]["nombre"]);//Paso los datos del array mediante un atributo al web component
           elemento.setAttribute("equipo",datos[i]["equipo"]);
           var posicionElemento = i+1;

           if(posicionElemento%2==0){
                document.getElementById("listaprueba2").appendChild(elemento);
           }else{
                document.getElementById("listaprueba1").appendChild(elemento);
           }
           
       }

   </script>

</body>
</html>
