<?php
include "conexion.php";
$con = connection();

if (isset($_SESSION['name'])) {
    header("Location: bienvenido.php");
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM usuarios WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO usuarios (name, email, password) VALUES ('$name', '$email', '$password')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo "<script>alert('registro exitoso.')</script>";
                $name = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Algo salió mal. Inténtalo de nuevo.')</script>";
            }
        } else {
            echo "<script>alert('El correo ya existe.')</script>";
        }
    } else {
        echo "<script>alert('Las contraseñas no coinciden.')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro</title>
</head>

<body>
    <div class="container">
        <div class="register-screen">
            <form action="" method="POST" class="login-email">
                <div class="register-form">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800; color: #222;">Registro</p>
                    <div class="input-group">
                        <input type="text" placeholder="Nombre" name="name" required>
                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="Correo" name="email" required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Contraseña" name="password" required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Confirmar contraseña" name="cpassword" required>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Registrar</button>
                    </div>
                    <p class="login-register-text">¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
