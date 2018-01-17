<?php 

include_once "../includes/data/UserTable.php";

$userTable = new UserTable();

if(!$userTable->isAdmin()) {
  header("Location: /");
  exit();
}

include_once "../includes/data/BookTable.php";

$bookTable = new BookTable();


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$bookTable->delete($id);

header("Location: index.php");