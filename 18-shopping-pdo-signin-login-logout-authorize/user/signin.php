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
  
  $userTable->create($username, $password);
  $userTable->login($username, $password);
  
  header("Location: /");
  exit();
  
}

include "../includes/header.php";

?>

<h1 class="mt-3 mb-3">Registrate</h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrate</li>
  </ol>
</nav>

<div class="row">
  <div class="col-sm">
    
    <form method="post" action="signin.php">
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