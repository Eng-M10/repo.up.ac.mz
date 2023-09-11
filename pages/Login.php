<?php
require_once "Connection.php";
class Login{


    private $con;



    public function __construct()
    {
           
        if(PHP_SESSION_ACTIVE != session_status())
         session_start();

        $this->con = new Connection("localhost","Muvi.dev","SbA25EFPvGNQy]Wg","repofet");
        $this->con = $this->con->connect();
    }



    public function remember_me($cookie){
        $id = $cookie;
        $sql = "SELECT id,nome,user,senha,nivel_acesso FROM usuario WHERE id = '$id'";
        $result = $this->con->query($sql)->fetch_assoc();

        if($result["nivel_acesso"] == "admin"){
            $_SESSION['user'] = $result["user"];
            $_SESSION['id'] = $result["id"];
            $_SESSION['nome'] = $result["nome"];
            $_SESSION['admin'] = $result["nivel_acesso"];
            $_SESSION['status']['logado'] = true;
            header("Location: ../admin.php");
             }
        else{
        $_SESSION['user'] = $result["user"];
        $_SESSION['nome'] = $result["nome"];
        $_SESSION['nivel_acesso'] = $result["nivel_acesso"];
        $_SESSION['status']['logado'] = false;
        header("Location: ../profile.php");
             }

    }



    public function auth($user,$password){

        $sql = "SELECT id,nome,user,senha,nivel_acesso FROM usuario WHERE user = '$user'";
        $result = $this->con->query($sql)->fetch_assoc();

       
       if(password_verify($password, $result["senha"])){
            
            
           if($result["nivel_acesso"] == "admin"){
               $_SESSION['user'] = $result["user"];
               $_SESSION['id'] = $result["id"];
               $_SESSION['nome'] = $result["nome"];
               $_SESSION['admin'] = $result["nivel_acesso"];
               $_SESSION['status']['logado'] = true;

                if( isset($_POST["remember"]) ){
                    setcookie("remember", $result['id'], time() + 30);
                   }
                header("Location: ../admin.php");
                exit();
              
            } else {
                $_SESSION['user'] = $result["user"];
                $_SESSION['nome'] = $result["nome"];
                $_SESSION['nivel_acesso'] = $result["nivel_acesso"];
                $_SESSION['status']['logado'] = false;

                if( isset($_POST["remember"]) ){
                    setcookie("remember", $result['id'], time() + 30);
                   }

                header("Location: ../profile.php");
                exit();

            }
        }
    }
}

