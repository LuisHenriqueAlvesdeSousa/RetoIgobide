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
            background-image: url(fondo_login.bmp);
        }

        #contLogin{
            width: 1000px;
            height: 1000px;
            background-color: orange;
            margin: 5em auto;
        }

    </style>
    <div id="contLogin">
        <form method="POST" action="index.php">
            @csrf
            <label for="email">
                <span>Email Coorporativo</span>
                <input type="email" id="email" name="email" required>
            </label>
            <label for="password">
                <span>Contraseña</span>
                <input type="password" id="password" name="password" required>
            </label>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
