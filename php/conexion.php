<?php 

$servidor = "localhost";
$usuario = "root";
$password = "conejomemo1";

$db = "ecommerce";
$mysqli = new mysqli($servidor, $usuario, $password, $db);
mysqli_set_charset($mysqli, 'utf8');




 ?>

