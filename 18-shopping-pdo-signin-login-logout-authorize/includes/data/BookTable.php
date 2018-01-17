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
  
}
