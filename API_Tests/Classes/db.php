<?php
class DataBase {


    public $servername = "127.0.0.1";
    public $username = "root";
    public $password = "";
    public $dbname = "testbd_";

function __construct($servername,$username,$password,$dbname)
 {
     $this->servername = $servername;
     $this->username = $username;
     $this->password = $password;
     $this->dbname = $dbname;
 }
//  function __construct()
//  {
    
//  }
 function connect()
 {
    try {
        $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", "$this->username", "$this->password");
        $status = $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS);
        return $conn;
    }
     catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
        die();
    } 
 }
}
?>