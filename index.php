<?php
  $conexion = new mysqli("localhost", "root", "", "Aeromexico",3307);
  if($conexion){
      echo "Exitoso!";
  } else{
      echo "Algo salio mal";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>aeromexico</title>
</head>
<body>
    <h1>Venta de boletos</h1>
    <form class="formulario" action="guardar.php" method="POST" >
        <label for="cliente">Cliente</label>
        <input type="text" id="cliente" name="cliente" maxlength="40" required><br><br>
        
        <label for="boleto">Boleto</label>
        <input type="text" id="boleto" name="boleto" maxlength="5" required><br><br>
        
        <label for="destino">Destino</label>
        <input type="text" id="destino" name="destino" maxlength="40" required><br><br>

        <button class="submit" type="submit">Enviar datos</button>

    </form>
</body>
</html>