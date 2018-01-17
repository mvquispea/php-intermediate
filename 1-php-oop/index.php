<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <title>&lt;fu//stack&gt; - OOP</title>
</head>
<body>
  <div class="container pt-3">
    <h1 class="pb-2 mb-3">Programación orientada a objetos</h1>
    <p>
      La programación orientada a objetos o POO es un estilo de programación que permite agrupar funcionalidad en contenedores. En php los contenedores se definen usando Clases.
    </p>
    <p>
      Una clase contiene todas las funciones y variables que definen al objeto. En POO las funciones se llaman metodos y las variables propiedades.
    </p>
    <h2 class="pb-2 mb-3">Clase</h2>
    <p>
      Podemos tomas como ejemplo el diseño de una casa.
    </p>
    <p class="text-center">
      <img src="images/house-class.png">
    </p>
    <p>
      La clase en php seria el equivalente al plano de la casa. En POO podemos describir la casa como
    </p>
    <pre>
      <code class="php">
        &lt;?php
        
        // Clase que describe la casa
        class home {
          
          // Propiedades de la casa
          public $color;
          public $doors;
          public $windows;
          
          // Metodo para abrir la puerta
          public function openDoor() 
          {
            echo "Puerta abierta";
          }
          
          // Metodo para cerrar la puerta
          public function closeDoor() 
          {
            echo "Puerta cerrada";
          }
          
        }
        
        ?&gt;
      </code>
    </pre>
    <h2 class="pb-2 mb-3">Objeto</h2>
    <p>
      En POO un objeto es una implementacion de la clase.
    </p>
    <p class="text-center">
      <img src="images/house-object.png">
    </p>
    <h2 class="pb-2 mb-3">Implementación</h2>
    <p>
      Cada Objeto o implementación de la clase es independiente de los otros objetos. Por ejemplo las propiedades de las dos casas son distintas.
    </p>
    <pre>
      <code class="php">
        &lt;?php
        
          $home1 = new Home();
          $home1->color = 'red';
          
          $home2 = new Home();
          $home2->color = 'blue';
        
        ?&gt;
      </code>
    </pre>
    <p class="text-center">
      <img src="images/house-object-2.png">
    </p>
  </div>
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>