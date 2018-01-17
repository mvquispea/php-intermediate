<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <link rel="stylesheet" href="css/custom.css">
  <title>&lt;fu//stack&gt; - Authentication vs Authorization</title>
</head>
<body>
  <div class="container pt-3">
    <h1 class="pb-2 mb-3">Identificación y Autorización</h1>
    <h5>Diferencias entre Identificación y Autorización</h5>
    <p>
      <strong>Identificación</strong> es el proceso de identificar al usuario.
    </p>
    <p>
      <strong>Autorización</strong> es el proceso de autorizar un usuario identifacado a utilizar un recurso. 
    </p>
    <h5>Ejemplo</h5>
    <p>
      Accesso a un Hotel. 
    </p>
    <p class="text-center">
      <img src="images/hotel.png">
    </p>
    <p>
      Para entrar en el hotel nos dan una tarjeta de accesso. La llave equivale al proceso de identificación.
    </p>
    <p class="text-center">
      <img src="images/key.png">
    </p>
    <p>
      Luego esa llave nos da acceso a solo nuestra habitación. El tener acceso solo a nuestra habitación equivale al proceso de autorización. 
    </p>
    <p class="text-center">
      <img src="images/door.png">
    </p>
    <h5>PHP</h5>
    <p>
      En php por lo general se identifica a los usuarios preguntado el usuario y contraseña atravez de un formulario.
    </p>
    <p>
      Por ejemplo antes de poder utilizar el panel de control de una web primero tenemos que identificar al usuario y luego verificar si esta autorizado.
    </p>
    <h5>Contraseñas</h5>
    <p>
      <a href="password.php">ver hash</a>
    </p>
  </div>
</body>
</html>