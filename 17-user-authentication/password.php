<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <link rel="stylesheet" href="css/custom.css">
  <title>&lt;fu//stack&gt; - Password hash</title>
</head>
<body>
  <div class="container pt-3">
    <h1 class="pb-2 mb-3">Password</h1>
    <p>
      Es recomendable cifrar las contraseñas con una funcion Hash. Las funcion hash cifra las contraseñas en la base datos de manera que no puedan ser vistas por personas no autorizadas.
    </p>
    <h5>Ejemplo</h5>
    
    <?php
    $hash = password_hash('miconstraseñasecreta', PASSWORD_DEFAULT);
    ?>
    
    <pre>
      <code class="php">
        &lt;?php
        
        $passwordHash = password_hash('miconstraseñasecreta', PASSWORD_DEFAULT);
        
        // la funcion password_hash produce el siguiente hash
        echo $passwordHash; // <?= $hash ?>
        
        
        ?&gt;
      </code>
    </pre>
    
  </div>
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>