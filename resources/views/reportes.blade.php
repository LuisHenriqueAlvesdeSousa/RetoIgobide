<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        @if (session('status')) 
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    <div id="contReportes">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error}}</p><br>
                @endforeach

        <h1>Generador de repotes en Excel.</h1>
        <p>Aquí podrás podras generar un reporte y descargar un archivo Excel (.xsl) en el cual podrás analizar e imprimir los datos con mayor facilidad</p>

            <form method="post">
            @csrf
                <input type="submit" value="Generar Reporte">
            </form>
    </div>
</body>
</html>
