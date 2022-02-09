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

        #contLogin{
            width: 500px;
            height: 500px;
            background-color: #f2f2f2;
            border-radius: 3em
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
