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
  <title>&lt;fu//stack&gt; - Data persistent</title>
</head>
<body>
  <div class="container pt-3">
    <h1 class="pb-2 mb-3">Sessions & Cookies</h1>
    <p>
      La persistencia de datos significa almacenar información por un periodo prolongado de tiempo. El protocolo HTTP es <i>stateless</i> lo que significa que 
      los servidores no mantienen la información entre de los visitantes entre las visitas.
    </p>
    <h2 class="pb-2 mb-3">Session</h2>
    <p>
      El termino session se refiere a la ventana de tiempo en la cual un usuario esta navegando en la página web. En otras palabras representa el tiempo
      entre la primera vista a la página y cuando termina de navegarla.
    </p>
    <p>
      Es dificil determinar cuando un usuario dejo de navegar la página por eso que la session termina en dos modos: 
    </p>
    <ul>
      <li>Cuando el usuario cierra el navegador</li>
      <li>Cuando el usuario no tiene actividad en la página por un determinado periodo de tiempo. Por defecto en php es de 1440 segundo que equivale a 24 minutos.</li>
    </ul>
    <p>
      En PHP se pueden guardar variables en la session. Las variables de session se almacenan en la memoria del servidor
    </p>
    <p>
      La desventaja de las variables en session es que se pierden cuando se termina la session. Para almacenar datos aún cuando se cierra la sessión se utilizan las Cookies.
    </p>
    <h5>¿Como iniciar una session?</h5>
    <p>En PHP la session no se inician automaticamente. Es necesario llamar a la funcion <strong>session_start()</strong>.</p>
    <pre>
      <code class="php">
        &lt;?php
        
        // Start the session
        session_start();
        
        ?&gt;
      </code>
    </pre>
    <h5>¿Como se almacena una variable en la session?</h5>
    <p>Para grabar una variable en la session se utiliza la super variable global <strong>$_SESSION</strong>.</p>
    <pre>
      <code class="php">
        &lt;?php
        
        // Start the session
        session_start();
        
        $_SESSION["nombre"] = "Marco";
        
        ?&gt;
      </code>
    </pre>
    <p>Sucesivamente podemos lleer el valor de variable accediendo a la super variable global <strong>$_SESSION</strong>.</p>
    <pre>
      <code class="php">
        &lt;?php
        
        // Start the session
        session_start();
        
        // Prints Hola Marco
        echo "Hola " . $_SESSION["nombre"];
        
        ?&gt;
      </code>
    </pre>
    <h5>¿Como se elimina una variable de la session?</h5>
    <pre>
      <code class="php">
        &lt;?php
        
        // Start the session
        session_start();
        
        
        unset($_SESSION["nombre"]);
        
        ?&gt;
      </code>
    </pre>
    <h5>¿Como se destruye la session completamente?</h5>
    <pre>
      <code class="php">
        &lt;?php
        
        // Start the session
        session_start();
        
        / remove all session variables
        session_unset(); 
        
        // destroy the session 
        session_destroy(); 
        
        ?&gt;
      </code>
    </pre>
    <h2 class="pb-2 mb-3">Cookies</h2>
    <p>
      Cookies son datos que se envían desde el servidor y se almacenan en el navegador del visitante. El perido de vida de una Cookie es determinado por el tercer parametro de la 
      función setcookie. Si el tercer parametro esta vacio la Cookie deja de existir cuando se cierra el navegador lo cual no es util.
    </p>
    <h5>¿Como se crea un Cookie?</h5>
    <pre>
      <code class="php">
        &lt;?php
        
        setcookie("CookieName", "Marco", time()+3600);  // expire in 1 hour */
        
        ?&gt;
      </code>
    </pre>
    <h5>¿Como leer el valor de un Cookie?</h5>
    <p>Podemos leer el valor de un Cookie accediendo a la super variable global <strong>$_COOKIE</strong>.
    <pre>
      <code class="php">
        &lt;?php
        
        echo $_COOKIE["CookieName"];
        
        ?&gt;
      </code>
    </pre>
    <h5>¿Como se elimina un Cookie?</h5>
    <pre>
      <code class="php">
        &lt;?php
        
        setcookie("CookieName", "Marco", time()-3600);  // set the expiration date to one hour ago
        
        ?&gt;
      </code>
    </pre>
    <h5>¿Como verifiar si el navegador acepta Cookies?</h5>
    <pre>
      <code class="php">
        &lt;?php
        
        setcookie("test_cookie", "test", time() + 3600, '/');
        
        if(count($_COOKIE) > 0) {
          echo "Cookies are enabled.";
        } else {
          echo "Cookies are disabled.";
        }
        
        ?&gt;
      </code>
    </pre>
  </div>
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>