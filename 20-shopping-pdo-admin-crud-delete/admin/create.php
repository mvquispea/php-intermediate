<?php 

include_once "../includes/data/UserTable.php";

$userTable = new UserTable();

if(!$userTable->isAdmin()) {
  header("Location: /");
  exit();
}

include_once "../includes/data/BookTable.php";

$bookTable = new BookTable();

if(!empty($_POST)) {
  $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
  $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
  $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
  
  $bookTable->create($title, $price, $img);
  header("Location: index.php");
  exit();
}

include "../includes/header.php";

?>

<h1 class="mt-3 mb-3">Panel de control</h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/index">Panel de control</a></li>
    <li class="breadcrumb-item active" aria-current="page">Nuevo libro</li>
  </ol>
</nav>


<div class="row">
  
  <div class="col-sm">
    
    <form method="post" action="">
      
      <div class="form-group">
        <label>Título</label>
        <input type="text" class="form-control" name="title">
      </div>
      
      <div class="form-group">
        <label>Precio</label>
        <input type="text" class="form-control" name="price">
      </div>
      
      <div class="form-group">
        <label>Ruta a la imagen</label>
        <input type="text" class="form-control" name="img">
      </div>
      
      <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
    
  </div>
  
</div>

<?php include "../includes/footer.php" ?>