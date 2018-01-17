<?php 

include_once "../includes/data/UserTable.php";

$userTable = new UserTable();

if(!$userTable->isAdmin()) {
  header("Location: /");
  exit();
}

include_once "../includes/header.php";

$bookTable = new BookTable();
$books = $bookTable->getBooks();

?>

<h1 class="mt-3 mb-3">Panel de control</h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Panel de control</li>
  </ol>
</nav>

<div class="row">
  
  <div class="col-sm">
    
    <a href="create.php" class="btn btn-primary mb-3">
      Agregar un libro
    </a>
    
    <table class="table">
      <thead>
        <tr>
          <th>Libro</th>
          <th>Precio</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($books as $book): ?>
          <tr>
            <td><?= $book['title'] ?></td>
            <td>S/. <?= $book['price'] ?></td>
            <td class="text-right">
              <a href="updateebook.php" class="btn btn-primary mb-3">
                Actualiza
              </a>
              <a href="deletebook.php" class="btn btn-danger mb-3">
                Elimina
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  
</div>

<?php include "../includes/footer.php" ?>