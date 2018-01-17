<?php 

session_start();

include_once "Database.php";

class UserTable extends Database {
  
  public function create($username, $password) {
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "insert into users (username, password) values (:username, :password)";
    
    try {
      
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':password', $hash);
      $stmt->execute();
      
    } catch(Exception $e) {
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
    }
    
  }
  
  public function login($username, $password) {
    
    $sql = "select * from users where username = :username";
    try {
      
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':username', $username);
      $stmt->execute();
      
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if(!empty($row)) {
        
        if(password_verify($password, $row['password'])) {
          $_SESSION['user_login'] = true;
          $_SESSION['user_username'] = $row['username'];
          $_SESSION['user_isadmin'] = $row['isadmin'];
          
          return true;
        } else {
          
          return false;
        }
        
      } else {
        
        return false;
        
      }
      
    } catch(Exception $e) {
      echo "Ocurrio un error al ejecutar la query: " . $e->getMessage();
      exit();
    }
    
  }
  
  public function isAuthorize() {
    $userLogin = $_SESSION['user_login'];
    
    if($userLogin) {
      return true;
    } else {
      return false;
    }
  }
  
  public function isAdmin() {
    if($this->isAuthorize()) {
      return $_SESSION['user_isadmin'] == 1;
    }
    
    return false;
  }
  
  public function getProfile() {
    return $_SESSION;
  }
  
  public function logout() {
    unset($_SESSION['user_login']);
    unset($_SESSION['user_username']);
    unset($_SESSION['user_isadmin']);
  }
  
}