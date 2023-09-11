
<?php
require_once __DIR__."/pages/SignUp.php";

if(PHP_SESSION_ACTIVE != session_status())
    session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $register = new SignUp();
    $register->registrate($_POST["nome"],$_POST["user"], $_POST["password"],$_POST["confirm_password"]);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            justify-content: space-between;
        
            min-height: 100vh;
            background-color: #000;
            color: #fff;
            margin: 0;
        }
        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            text-align: center;
        }
        .conteudo {
            margin-top: 20px;
        }
        .input-group-text {
            background-color: #444;
            color: #fff;
        }
        .form-control {
            background-color: #fff;
            border-color: #fff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #555;
            border:none;
        }
        footer{
            margin-top: 20px;
        }
    </style>



</head>
<body>
    <div class="container">
        <img src="./img/up_logo.png" alt="" class="w-20">
        <h1>Cadastrar</h1>
        <div class="conteudo">
            <form method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" required name="nome" id="nome" class="form-control" placeholder="Nome">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" required name="user" id="user" class="form-control" placeholder="Usuário">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" required name="password" id="password" class="form-control" placeholder="Senha">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" required name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirmar Senha">
                </div>
                <input type="submit" value="Salvar" class="btn btn-primary">
                <a href="login.php" class="btn btn-secondary">Entrar</a>
            </form>
        </div>
    </div>
    <footer class="footer  " >
        <p>>&copy; All rights are reserved! Powered by <a href="https://github.com/Eng-M10">Muvimbene Maposse</a></p>
    </footer>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css">
</body>
</html>

