<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular el voltaje de un circuito</h1>
    <h3>Ingrese la corriente y la resistencia</h3>
    <form action="3.php" method="get">
        <label>Inserte corriente</label>
        <input type="number" name="corriente" placeholder="amperios">
        <label>Inserte resistencia</label>
        <input type="number" name="resistencia" placeholder="ohmios">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>

<?php

$corriente = "{$_GET["corriente"]}";
$resistencia = "{$_GET["resistencia"]}";

$voltaje = $corriente * $resistencia;

if($_GET){
    echo "El voltaje del circuito es de {$voltaje} voltios";
}

?>