<?php 

include_once "../includes/data/UserTable.php";

$userTable = new UserTable();

if(!$userTable->isAdmin()) {
  header("Location: /");
  exit();
}

include_once "../includes/data/OrderTable.php";

$orderTable = new OrderTable();


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$orderTable->sent($id);

header("Location: order.php");