<?php
$servername = "localhost";
$username = "Muvi.dev";
$password = "SbA25EFPvGNQy]Wg";
$dbname = "repofet";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
else {
   // echo "Conexão realizada com sucesso!";
}
?>
