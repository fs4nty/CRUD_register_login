<?php
include ('conexion.php');
$con = connection();


if(!empty($_POST["boton"])){

  
    if (empty($_POST["email"]) and empty($_POST["password"])) {
        echo "<script>alert('Por favor ingrese los datos')</script>";
    } else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = $con->query ("SELECT * FROM usuarios WHERE email='$email' AND password='$password'");

        if ($datos = $sql -> fetch_object()) {
            echo "<script>alert('Se ha logeado exitosamente')</script>";
            header("Location: bienvenido.php");
        } else {
            echo "<script>alert('Usuario no encontrado.')</script>";
        }
    }
} else  {
    ECHO "<script>alert('NO SE HA ENVIADO NADA')</script>";
}
