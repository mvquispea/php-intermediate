<?php

include "includes/header.php";

?>

<h1>Contacta me</h1>
<p>Enviame un mensaje si te gustaron mis fotos.</p>

<div>
  <form action="email.php" method="post">
    <label>Nombre</label>
    <div>
      <input type="text" name="nombre">
    </div>

    <label>Correo</label>
    <div>
      <input type="text" name="correo">
    </div>

    <label>Mensaje</label>
    <div>
      <textarea name="mensaje" rows="3"></textarea>
    </div>
    <p>
      <input type="submit" value="Enviar">
    </p>
  </form>
</div>

<?php

include "includes/footer.php"

?>
