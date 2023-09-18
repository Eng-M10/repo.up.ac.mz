<?php
if (PHP_SESSION_ACTIVE != session_status()) 
session_start();

$nome = $_SESSION['nome'];
if(!isset($_SESSION['admin'])   ||  $_SESSION['status']['logado'] != true) {

header("Location: login.php");
exit;
}
    require_once "./pages/Edit.php";

    $edt = new Edit();


    if (isset($_POST['update'])) {
        $name = $_POST["nome"] ;
        $user = $_POST["user"];
        $password = $_POST["password"];


        $this->edt->update($name,$user,$password);
    }

if (isset($_GET['id'])) {
    $id = $_GET['id'];

   $result = $edt->retrieve($id);

   $nome = $result['nome'];
   $user = $result['user'];
   $password = $result ['senha'];
    
    

    
?>
<!DOCTYPE html>
<head>
<title>Cadastrar</title>
    <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
        <h1>Editar</h1>
        <div class="conteudo" class="">
            <form method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" required name="nome" id="nome" class="form-control" placeholder="Nome" value="<?php echo $nome; ?>"  >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" required name="user" id="user" class="form-control" placeholder="Usuário" value="<?php echo $user;?>" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="text" required name="password" id="password" class="form-control" placeholder="Senha" value="<?php echo $password; ?>" >
                </div>
                <input type="submit" value="update" class="btn btn-primary">
               
            </form>
        </div>
    </div>
</body>
    </html>
    <?php
    



    } else{
        header('Location: admin.php');
    }

?>