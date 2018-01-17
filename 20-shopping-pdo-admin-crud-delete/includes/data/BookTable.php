<?php 

include_once "Database.php";

class BookTable extends Database {
  
  //Envía una Query a la base de datos y devuelve un array de libros
  public function getBooks() 
  {
    
    $sql = "select * from books";
    
    try {
      
      $resultSet = $this->conn->query($sql);
      $rows = $resultSet->fetchAll(PDO::FETCH_ASSOC);
      
      return $rows;
      
    } catch(Exception $e) {
      
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
      
    }
    
  }
  
  public function getBook($id) {
    
    $sql = "select * from books where id = :id";
    
    try {
      
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $rows = $stmt->fetch(PDO::FETCH_ASSOC);
      
      return $rows;
      
    } catch(Exception $e) {
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
    }
    
  }
  
  public function create($title, $price, $img) {
    $sql = "insert into books (title, price, img) values (:title, :price, :img)";
    
    try {
      
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':title', $title);
      $stmt->bindParam(':price', $price);
      $stmt->bindParam(':img', $img);
      $stmt->execute();
      
    } catch(Exception $e) {
      
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
      
    }
  }
  
  public function delete($id) {
    $sql = "delete from books where id = :id";
    
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
