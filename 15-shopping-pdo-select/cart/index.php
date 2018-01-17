<?php 

include "../includes/header.php"; 

$bookTable = new BookTable();

?>

<h1 class="mt-3 mb-3">Carrito de compras</h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Carrito de compras</li>
  </ol>
</nav>

<?php if(empty($_SESSION['cart'])): ?>
  
  <div class="alert alert-primary">
    El carrito esta vacío
  </div>
  
<?php else: ?>
  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Imagen</th>
        <th scope="col">Título</th>
        <th scope="col">Precio</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      
      <?php foreach($_SESSION['cart'] as $id): ?>
        
        <?php 
        $book = $bookTable->getBook($id);
        $total += $book['price']; 
        ?>
        
        <tr>
          <td><img src="<?= $book['img'] ?>" width="90"></td>
          <td><?= $book['title'] ?></td>
          <td>S/. <?= $book['price'] ?></td>
          <td class="text-right"><a href="delete.php?id=<?= $book['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
        </tr>
        
      <?php endforeach; ?>
      
      <tr>
        <td></td>
        <td class="text-right">Total</td>
        <td>S/. <?= $total ?></td>
        <td class="text-right"><a href="thanks.php" class="btn btn-success btn-sm">Pagar</a></td>
      </tr>
      
    </tbody>
  </table>
  
  
  
<?php endif; ?>

<div class="text-center">
  <a href="/" class="btn btn-secondary">Agregar productos</a>
</div>

<?php include "../includes/footer.php"; ?>