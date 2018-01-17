<?php 

include "includes/header.php"; 

$bookTable = new BookTable();
$books = $bookTable->getBooks();


?>

<h1 class="mt-3 mb-3">Libros en venta</h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<div class="text-right">
  <a href="cart/index.php" class="btn btn-secondary mb-3">
    Carrito (<?= count($_SESSION['cart']) ?>)
  </a>
</div>

<div class="row">
  
  <?php foreach($books as $book): ?>
    <div class="col-sm">
      <div class="card">
        <img class="card-img-top" src="<?= $book['img'] ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $book['title'] ?></h5>
          <p class="card-text">Precio: S/. <?= $book['price'] ?></p>
          <a href="cart/add.php?id=<?= $book['id'] ?>" class="btn btn-primary">Agregar al carrito</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  
</div>

<?php include "includes/footer.php" ?>