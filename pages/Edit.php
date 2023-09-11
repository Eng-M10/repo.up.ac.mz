<?php
require_once "Connection.php";

class Edit {
       
    private $con;

    public function __construct()
    {
        $conn = new Connection("localhost","Muvi.dev","SbA25EFPvGNQy]Wg","repofet");
        $this->con = $conn ->connect();
    } 


   public function update($nome,$user,$password,$id){

    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE usuario SET VALUES ('$nome', '$user', '$password') WHERE id='$id'";
    $result = $this->con->query($sql);
    if ($result == TRUE) {
        echo "Record updated successfully.";
        header('Location: ./admin.php');
    }else{
        echo "Error:" . $sql . "<br>" . $this->con->error;
    }
   }


   public function retrieve($id){
    $sql = "SELECT * FROM usuario WHERE id='$id'";
    $result = $this->con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row;
        }
   }
    }
}