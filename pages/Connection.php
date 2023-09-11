<?php
class Connection{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername = $servername;
        $this->username= $username;
        $this->password= $password;
        $this->dbname= $dbname;
    }


    public function connect(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

    if ($this->conn->connect_error) {
                die("Conexão falhou: " . $this->conn->connect_error);
            }
    else {
        return $this->conn;
            }
}

}