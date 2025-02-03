


<?php
    include("abre.php");

    $cliente  =$_POST['cliente'];
    $boleto   =$_POST['boleto'];
    $destino  =$_POST['destino'];

    $consulta ="INSERT INTO boletoss(cliente, boleto, destino) VALUES 
    ('$cliente', '$boleto', '$destino')";

    if($conexion->query($consulta) === TRUE ){
        header("location: index.php");
    }else{
        echo "El error es " .$consulta. "br" .$conexion->error;
    }

    $conexion->close();



?>