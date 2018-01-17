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
  
  public function getOrders() 
  {
    
    $sql = "select * from orders order by sent";
    try {
      
      $resultSet = $this->conn->query($sql);
      $rows = $resultSet->fetchAll(PDO::FETCH_ASSOC);
      
      $orders = [];
      foreach($rows as $row) {
        $cart = json_decode($row['cart']);
        
        $total = 0;
        $titles = [];
        
        foreach($cart as $bookId) {
          $bookTable = new BookTable();
          $book = $bookTable->getBook($bookId);
          
          $titles[] = $book['title'];
          $total += $book['price'];
          
        } 
        $order = ['id' => $row['id'], 'titles' => $titles, 'total' => $total, 'sent' => $row['sent'], 'created_at' => $row['created_at']];
        
        $orders[] = $order;
      }
      
      return $orders;
      
    } catch(Exception $e) {
      
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
      
    }
    
  }
  
  public function sent($id) {
    
    $sql = "update orders set sent = '1' where id = :id";
    
    try {
      
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      
    } catch(Exception $e) {
      
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
      
    }
    
  }
  
}