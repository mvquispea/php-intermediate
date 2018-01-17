<?php 

session_start();

$userTable = new UserTable();

if(!$userTable->isAuthorize()) {
  header("Location: /user/login.php");
  exit();
}

$orderTable = new OrderTable();

$cart = $_SESSION['cart'];
$orderTable->create($cart);

header("Location: /cart/thanks.php");
exit();