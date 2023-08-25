<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); 
    
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    var_dump($sql); // Debug - Verifica a consulta SQL gerada

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form method="POST" action="">
            <label>Nome:</label>
            <input type="text" name="nome"><br>
            <label>Email:</label>
            <input type="email" name="email"><br>
            <label>Senha:</label>
            <input type="password" name="senha"><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
