<?php 

session_start();

$orderTable = new OrderTable();

$cart = $_SESSION['cart'];
$orderTable->create($cart);

header("Location: /cart/thanks.php");
exit();