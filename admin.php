
<?php

//if (PHP_SESSION_ACTIVE != session_status()) 
    session_start();
//
$nome = $_SESSION['nome'];
if(!isset($_SESSION['admin'])   or  $_SESSION['nivel_acesso'] != "admin") {
 
   header("Location: login.php");
   exit;
}
?>
    

    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Administrador: <?php echo($nome) ?></h3>
                <h1>Gerenciar Usuários</h1>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="new_username" class="form-label">Usuário:</label>
                        <input type="text" name="new_username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Senha:</label>
                        <input type="password" name="new_password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="access_level" class="form-label">Nível de Acesso:</label>
                        <select name="access_level" class="form-select">
                            <option value="user">Usuário</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar Usuário</button>
                </form>
                <p><?php //echo $message; ?></p>
                <a href="index.php">Voltar ao Dashboard</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

