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
            height: 50px;
            border: 2px solid #eee
        }

        .forms-inputs input:focus {
            box-shadow: none;
            outline: none;
            border: 2px solid #000
        }

        .btn {
            height: 50px
        }

        .success-data {
            display: flex;
            flex-direction: column
        }

        .bxs-badge-check {
            font-size: 90px
        }

    </style>
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                <form method="POST" action="index.php">
                    @csrf
                    <div class="forms-inputs mb-4"> 
                        <label for="email">
                            <span>Email Coorporativo</span>
                            <input type="email" id="email" name="email" required>
                        </label>
                    </div>
                    <div class="forms-inputs mb-4">
                        <label for="password">
                            <span>Contraseña</span>
                            <input type="password" id="password" name="password" required>
                        </label>
                    </div>
                    <div class="mb-3"><input type="submit" value="Entrar"></div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
