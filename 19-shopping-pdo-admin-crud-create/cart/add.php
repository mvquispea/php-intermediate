<?php 

session_start();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$_SESSION['cart'][] = $id;

header("Location: /index.php");
exit();