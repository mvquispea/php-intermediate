<?php

include "functions.php";

$menu = [
  "Home" => "index.php",
  "Contactos" => "contactos.php"
];

?>
<!doctype html>
<html>
<!-- Inicio encabezado -->
<head>
  <title>Mi página web personal</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<!-- Fin encavezado -->

<!-- Inicio Cuerpo -->
<body>

  <div id="main">

    <div id="menu">
      <?php foreach($menu as $item => $url): ?>
        <a href="<?= $url ?>" class="menu-link"><?php echo $item ?></a>
      <?php endforeach; ?>
    </div>
