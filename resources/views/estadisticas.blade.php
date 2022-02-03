<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <!--
        @section('content')
        @if (session('status')) 
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    -->
    <div id="contReportes">
                    <!--
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error}}</p><br>
                @endforeach
                {!! csrf_field() !!}
            -->
        <h1>Generador estadísticas en Excel.</h1>
        <p>Aquí podrás podras generar una estadística y descargar un archivo Excel (.xsl) referente a la fechas que indiques.</p>

            <form method="post">
                <div id="contFch">
                    <label for="fchInicio">
                        <span>Fecha Inicio</span>
                        <input type="date" id="fchInicio" name="fchInicio">
                    </label>
                    <label for="fchFin">
                            <span>Fecha Final</span>
                            <input type="date" id="fchFin" name="fchFin">
                    </label>
                </div>
                <input type="submit" value="Generar Estadística">

            </form>
    <!--@endsection('content')-->
    </div>
</body>
</html>