<?php 

session_start();

require_once "../includes/data/OrderTable.php";
require_once "../includes/data/UserTable.php";

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