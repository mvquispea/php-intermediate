<?php 

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$cart = unserialize($_COOKIE["Cart"]);
$cart[] = $id;

setcookie("Cart", serialize($cart), time()+3600, '/');
header("Location: /index.php");
exit();