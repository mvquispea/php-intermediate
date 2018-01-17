<?php 

class Database {
  
  public $servername = "127.0.0.1";
  public $username = "root";
  public $password = "fullstack";
  public $database = "ebooks";
  
  public $conn;
  
  public function __construct() 
  {
    
    try {
      $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database;charset=utf8", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e) {
      echo "Imposible conectarse a la base de datos: " . $e->getMessage();
      exit();
    }
    
  }
  
}