<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <style>
        body{
            background-image: url(fondo_login.png);
        }


        .card {
            border: none;
            height: 320px
        }

        .forms-inputs {
            position: relative
        }

        .forms-inputs span {
            position: absolute;
            top: -18px;
            left: 10px;
            background-color: #fff;
            padding: 5px 10px;
            font-size: 15px
        }

        .forms-inputs input {
            height: 100px;
            border: 2px solid #eee
        }

        .forms-inputs input:focus {
            box-shadow: none;
            outline: none;
            border: 2px solid #000
        }

        .btn {
            height: 100px
        }


    </style>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
                <form method="POST" action="index.php">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" id="email" name="email" required class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                        <label for="floatingInput">Email Coorporativo</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="password" id="password" name="password" required class="form-control" id="floatingPassword" placeholder="Contraseña">
                        <label for="floatingPassword">Contraseña</label>
                    </div>

                    <div class="d-grid"><button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Entrar</button></div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
