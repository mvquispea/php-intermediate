<?php 

include_once "../includes/data/UserTable.php";

$userTable = new UserTable();

if($userTable->isAuthorize()) {
  header("Location: /");
  exit();
}

if(!empty($_POST)) {
  
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  
  $login = $userTable->login($username, $password);
  
  if($login) {
    
    if($userTable->isAdmin()) {
      header("Location: /admin/index.php");
      exit();
    } else {      
      header("Location: /");
      exit();
    }
  } 
  
  header("Location: login.php?error=1");
  exit();
  
}

include "../includes/header.php";

?>

<h1 class="mt-3 mb-3">Login</h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Login</li>
  </ol>
</nav>

<div class="row">
  <div class="col-sm">
    
    <?php if(isset($_GET['error'])): ?>
      <div class="alert alert-danger">
        Usuario o clave incorrectos
      </div>
    <?php endif; ?>
    
    <form method="post" action="login.php">
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    
  </div>
  
</div>

<?php include "../includes/footer.php" ?>