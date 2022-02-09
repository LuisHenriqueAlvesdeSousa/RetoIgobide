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
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error}}</p><br>
                @endforeach

        <h1 class="card-title text-center mb-5 fw-light fs-5">Generador estadísticas en Excel.</h1>
        <p>Aquí podrás generar una tabla con datos los datos de los empleados de la empresa y descargar un archivo Excel (.xsl) para un mejor análisis</p>

            <form method="post">
            @csrf
                <div class="d-grid"><input type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-success" value="Generar Estadística"></div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
