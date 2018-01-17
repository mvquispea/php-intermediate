<?php

function getPhotos() {
  $photos = [
    [
      'id' => 1,
      'titulo' => 'Centro financiero',
      'intro' => 'El centro financiero se encuentra en el distrito de San Isidro.',
      'imagen' => 'image/lima1.jpg',
      'enlace' => 'centro-financiero.php'
    ],
    [
      'id' => 2,
      'titulo' => 'Costa verde',
      'intro' => 'La costa verde vista desde el distrito de Miraflores.',
      'imagen' => 'image/lima2.jpg',
      'enlace' => 'costa-verde.php'
    ],
    [
      'id' => 3,
      'titulo' => 'Malencon de Miraflores',
      'intro' => 'Vista de Chorrillos desde el Malecon de Miraflores.',
      'imagen' => 'image/lima3.jpg',
      'enlace' => 'malecon-miraflores.php'
    ],
  ];

  return $photos;
}

function getPhoto($id) {
  $photos = getPhotos();

  foreach($photos as $photo) {

    if($photo['id'] == $id) {
      return $photo;
    }

  }
  
}



?>
