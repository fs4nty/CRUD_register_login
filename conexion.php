<?php

function connection() {
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_usuarios";

$connect = mysqli_connect($host, $user, $pass, $db);

return $connect;
}
?>
