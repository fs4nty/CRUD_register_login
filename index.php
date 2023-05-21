<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="login-screen">
            <div class="titulo">
                <h1>Login</h1>
            </div>
            <form action="loginn.php" method="POST" class="login-email">
                <div class="login-form">
                    <div class="control-group">
                        <input type="email" class="login-field" placeholder="Email" name="email" id="login-name" required>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" class="login-field" placeholder="Password" name="password" id="login-pass" required>
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <div class="input-group">
                        <!-- <button type="submit" name="boton" class="btn btn-primary btn-large btn-block">Login</button> -->
                        <a href="bienvenido.php"><input type="submit" name="boton" value="Login" class="btn btn-primary btn-large btn-block"></a>
                        no tienes una cuenta? <br> <a href="register.php">registrate aqui</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
