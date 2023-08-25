<?php
session_start();

if(!isset($_SESSION['admin']['user']) || $_SESSION['admin']['user'] != "admin") {
    header("Location: index.php");
    exit;
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lógica para cadastrar novos usuários (admin e user)
    $message = "Usuário cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gerenciar Usuários</title>
</head>
<body>
    <h1>Gerenciar Usuários</h1>
    <form method="POST" action="">
        <label>Usuário:</label>
        <input type="text" name="new_username"><br>
        <label>Senha:</label>
        <input type="password" name="new_password"><br>
        <label>Nível de Acesso:</label>
        <select name="access_level">
            <option value="user">Usuário</option>
            <option value="admin">Administrador</option>
        </select><br>
        <input type="submit" value="Cadastrar Usuário">
    </form>
    <p><?php echo $message; ?></p>
    <a href="dashboard.php">Voltar ao Dashboard</a>
</body>
</html>
