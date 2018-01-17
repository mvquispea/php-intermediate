<?php

include "includes/header.php";

$title = "Hola";
$intro = "Bienvenido a mi página web. Mi nombre es Marco y soy fotografo aficionado.";

$photos = getPhotos();

?>

<h1><?php echo $title ?></h1>
<p><?php echo $intro ?></p>

<h2>Fotos de lima</h2>

<?php foreach($photos as $photo): ?>

  <div class="card">
    <div class="card-content">
      <h3><a href="photo.php?id=<?php echo $photo['id'] ?>"><?php echo $photo['titulo'] ?></a></h3>
      <img src="<?php echo $photo['imagen'] ?>">
    </div>
  </div>

<?php endforeach; ?>

<h4>Mi equipo</h4>

<p>Camara Canon 9D</p>

<?php

include "includes/footer.php"

?>
