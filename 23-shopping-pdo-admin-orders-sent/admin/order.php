<?php 

include_once "../includes/data/UserTable.php";

$userTable = new UserTable();

if(!$userTable->isAdmin()) {
  header("Location: /");
  exit();
}

include_once "../includes/header.php";

$orderTable = new OrderTable();
$orders = $orderTable->getOrders();

?>

<h1 class="mt-3 mb-3">Panel de control</h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ordenes</li>
  </ol>
</nav>

<ul class="nav nav-tabs mt-3 mb-3">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="order.php">Ordenes</a>
  </li>
</ul>

<div class="row">
  
  <div class="col-sm">
    
    <table class="table">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Orden</th>
          <th>Total</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($orders as $order): ?>
          <tr>
            <td>
              <?= date('d/m/Y, H:i', strtotime($order['created_at'])) ?>
            </td>
            <td>
              <?php foreach($order['titles'] as $title): ?>
                <p><?= $title ?></p>
              <?php endforeach; ?>
            </td>
            <td>S/. <?= $order['total'] ?></td>
            <td class="text-right">
              <?php if($order['sent'] == 0): ?>
                <a href="sent.php?id=<?= $order['id'] ?>" class="btn btn-primary mb-3">
                  Enviar
                </a>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  
</div>

<?php include "../includes/footer.php" ?>