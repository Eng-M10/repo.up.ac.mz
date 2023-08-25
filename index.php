<?php

if (PHP_SESSION_ACTIVE != session_status()) session_start();

if (isset($_SESSION['normal'])  || isset($_SESSION['admin'])) {
        echo'<Script>alert(login bem sucedido)</Script>';
}
else {
    header("Location: index.php");
    exit;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repositorio - Faculdade de Engenharias e Tecnlogias</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="bg-dark.bg-gradient text-white p-4 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="./img/up_logo.png" alt="logo da up-maputo" class="w-10 h-50 me-2">
            <span class="border border-white mx-10"></span>
            <img src="./img/logo-fet.jpeg" alt="logotipo da fet" class="w-10 h-50 ms-2">
            <h1 class="h5 ms-2">Repositorio da Faculdade de Engenharias e Tecnologias</h1>
        </div>
        <div class="d-flex align-items-center">
            <input type="text" name="search" id="search" placeholder="Pesquisar" class="form-control me-2">
            <a href="login.php" class="text-white me-2">Login</a>
            <a href="signup.php" class="text-white">Cadastrar</a>
        </div>
    </div>


 

    <!-- Adicione o link para o Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
