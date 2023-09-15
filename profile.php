<?php

session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perfil</title>
    <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css">
</head>
<body>
    <h1>Perfil de <?php echo $username; ?></h1>
    <!-- Mostrar informações do perfil do usuário -->
    <a href="logout.php">Sair</a>
</body>
</html>
