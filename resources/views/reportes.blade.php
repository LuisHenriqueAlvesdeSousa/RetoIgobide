<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@include('header')

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

        <h1 class="card-title text-center mb-5 fw-light fs-5">Generador de repotes en Excel.</h1>
        <p>Aquí podrás podras generar un reporte y descargar un archivo Excel (.xsl) en el cual podrás analizar e imprimir los datos con mayor facilidad.</p>

            <form method="post">
            @csrf
                <div class="d-grid"><input type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-success" value="Generar Reporte"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('footer')
</body>
</html>
