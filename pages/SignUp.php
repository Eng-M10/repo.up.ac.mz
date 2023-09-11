<?php
require_once 'Connection.php';
class SignUp{
    private $con;

    public function __construct()
    {
        $this->con = new Connection("localhost","Muvi.dev","SbA25EFPvGNQy]Wg","repofet");
        $this->con = $this->con->connect();
        
    }

    public function registrate($nome,$user,$password,$confirm_password){
    
        if($password != $confirm_password){

            echo '<script>alert(As senhas não coincidem)</script>';

        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuario (nome, user, senha) VALUES ('$nome', '$user', '$password')";
            if($this->con->query($sql) === TRUE){

                echo '<script>alert(Usuário cadastrado com sucesso!)</script>';
                $this->con->close();
                header("Location: ./login.php");
                exit();
            } else {
                echo "Erro: ".$this->con->error;
            }
        }
    }



    public function edite(){

        
    }
}