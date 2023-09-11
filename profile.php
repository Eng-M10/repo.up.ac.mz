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
</head>
<body>
    <h1>Perfil de <?php echo $username; ?></h1>
    <!-- Mostrar informações do perfil do usuário -->
    <a href="index.php">Voltar ao Dashboard</a>
</body>
</html>
