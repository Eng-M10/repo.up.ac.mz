<?php
   require_once "./pages/Login.php";

    $login = new Login();

    if(isset($_COOKIE['remember'])){
            $login->remember_me($_COOKIE['remember']); 
        }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login->auth($_POST['user'],$_POST['password']);
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="shortcut icon" href="../img/up_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
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
            color: #0000;
        }
        .form-control {
            
            border-color: #fff;
            color: #0000;
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
<body class="bg-dark">
    <div class="container">
        <img src="./img/up_logo.png" alt="" class="w-20">
        <h1>Entrar</h1>
        <div class="conteudo">
            <form method="post">
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
                    <div class="checkbox">
                    <input type="checkbox" name="remember" id="remember"> <label for="remember">Lembrar-me</label> <br> <br>
                    </div>
                <input type="submit" value="Entar" class="btn btn-primary">
                <a href="signup.php" class="btn btn-secondary">Cadastro</a> <br>
                <a href="#">Esqueci-me da senha</a>
            </form>
        </div>
    </div>

    
    <footer class="footer bg-dark " >
        <p>>&copy; All rights are reserved! Powered by <a href="https://github.com/Eng-M10">Muvimbene Maposse</a></p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Adicione o link para os ícones do Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css">
</body>
</html>
