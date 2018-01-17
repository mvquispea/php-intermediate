<?php 

session_start();

// Si no exite la session,inicializamos el carrito con un arreglo vacío
if(!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

include_once "data/BookTable.php";
include_once "data/UserTable.php";
include_once "data/OrderTable.php";

$userTable = new UserTable();

?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <title>&lt;fu//stack&gt; - Shopping cart</title>
</head>
<body>
  <div class="container">
    <div class="text-right mt-3">
      <?php if($userTable->isAuthorize()): ?>
        <?php $user = $userTable->getProfile(); ?>
        Hola, <?= $user['user_username'] ?> - <a href="/user/logout.php">Salir</a>
      <?php else: ?>
        <a href="/user/login.php">Login</a> - <a href="/user/signin.php">Registrate</a>
      <?php endif; ?>
    </div>