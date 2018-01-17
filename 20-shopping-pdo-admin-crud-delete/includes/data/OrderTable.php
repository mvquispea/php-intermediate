<?php 

include_once "Database.php";

class OrderTable extends Database {
  
  public function create($cart, $email = '') {
    
    $cart = json_encode($cart);
    $sql = "insert into orders (email, cart) values (:email, :cart)";
    
    try {
      
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':cart', $cart);
      $stmt->execute();
      
    } catch(Exception $e) {
      
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
      
    }
    
  }
  
  public function getOrders() {
    
    $sql = "select * from orders";
    
    try {
      
      $resultSet = $this->conn->query($sql);
      $rows = $resultSet->fetchAll(PDO::FETCH_ASSOC);
      
      return $rows;
      
    } catch(Exception $e) {
      
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
      
    }
    
  }
  
}