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
  <title>&lt;fu//stack&gt;</title>
</head>
<body>
  <div class="container pt-3">
    <h1 class="pb-2 mb-3">Base de datos</h1>
    
    <p>
      Una base de datos es un programa que almacena información. La información es almacenada en tablas similares a un Excel. 
      La base de datos más utilizada con PHP es MySQl.
    </p>
    <p>
      La base de datos tienen dos componentes importantes: El <i>Schema</i> o esquema y la <i>Tabla</i>.
      El esquema establece como se almacena y se divide la información en secciones. La tabla almacena la información.
    </p>
    <h5>Tablas</h5>
    <p>
      <img src="images/tables2.png">
    </p>
    <p>
      El esquema define las columnas de la tabla y los tipos de datos que cada columna va almecenar.
      En la tabla podemos almacenar varios tipos de datos los más comunes: texto, números y fechas. Es importante definir los tipos de datos 
      en la columnas porque nos van a servir para poder filtar correctamente la información.
    </p>
    
    <h2 class="pb-2 mb-3">SQL</h2>
    <p>
      Para leer información de la base de datos se utiliza un lenguaje llamado SQL. El lenguaje SQL es simple y similar al Ingles.
    </p>
    <h3 class="pb-2 mb-3">Ejemplos</h3>
    
    <h5>Select</h5>
    <pre>
      SELECT * FROM table
      SELECT * FROM table1, table2, ...
      SELECT field1, field2, ... FROM table1, table2, ...
      SELECT ... FROM ... WHERE condition
    </pre>
    
    <h5>Insert</h5>
    <pre>
      INSERT INTO table1 (field1, field2, ...) VALUES (value1, value2, ...)
      INSERT table1 SET field1=value_1, field2=value_2 ...
    </pre>
    <h5>Update</h5>
    <pre>
      UPDATE table1, table2 SET field1=new_value1, field2=new_value2, ...
      WHERE table1.id1 = table2.id2 AND condition
    </pre>
    <h5>Delete</h5>
    <pre>
      DELETE FROM table1 / TRUNCATE table1
      DELETE FROM table1 WHERE condition
    </pre>
  </div>
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>