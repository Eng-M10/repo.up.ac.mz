<?php
require_once "Connection.php";
class Delete{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connection("localhost","Muvi.dev","SbA25EFPvGNQy]Wg","repofet");
        $this->conn = $this->conn->connect(); 
        
    }


    public function delete(){
       
            $id = $_GET['id'];
            $sql = "DELETE FROM usuario WHERE id ='$id'";
             $result = $this->conn->query($sql);
             if ($result == TRUE) {
                echo "<script>alert(Record deleted successfully)</script>";
                header('Location: admin.php');
            }else{
                echo "Error:" . $sql . "<br>" . $this->conn->error;
            }
    
    
   
    }
}



    
    