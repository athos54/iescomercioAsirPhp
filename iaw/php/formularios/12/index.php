<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    $tam = rand(5,100);
    echo $tam;
  ?>
  <form class="" action="procesar.php">
    Introduce el tamaño para el cuadrado:
    <input type="number" name="tamano" value="<?php echo $tam;?>" />
    <input type="submit" name="" value="Enviar">
  </form>
</body>
</html>