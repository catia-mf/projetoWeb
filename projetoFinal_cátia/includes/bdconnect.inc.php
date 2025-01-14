<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "projetoweb";

// Criar conexão
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Verificar conexão
if (!$conn) {
    die("Falha de ligação: " . mysqli_connect_error());
}

// Configurar charset
mysqli_set_charset($conn, "UTF8");
?>
