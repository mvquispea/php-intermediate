<?php 

session_start();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$cart = $_SESSION['cart'];
unset($_SESSION['cart']);

foreach($cart as $item) {
  if($item != $id) {
    $_SESSION['cart'][] = $item;
  }
}

header("Location: index.php");
exit();