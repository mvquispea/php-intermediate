<?php 

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$oldCart = unserialize($_COOKIE["Cart"]);
$cart = [];

foreach($oldCart as $item) {
  if($item != $id) {
    $cart[] = $item;
  }
}

setcookie('Cart', serialize($cart), time()+3600, '/');

header('Location: index.php');
exit();