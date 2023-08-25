<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row["senha"])) {
            header("Location: main.html"); 
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h2>Login <hr> <a href="signup.php">Sign up</a></h2>

        <form method="POST" action="">
            <label>Email:</label>
            <input type="email" name="email"><br>
            <label>Senha:</label>
            <input type="password" name="senha"><br>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
