<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Construir el algoritmo para un programa que ingrese tres
notas de un alumno, si el promedio es menor o igual a 3.9
mostrar un mensaje "Estudie“, de lo contrario un mensaje que
diga "becado"</h4>
    <h3>Ingrese 3 notas del alumno</h3>
    <p>Por favor escriba los números del 1 al 50</p>
    <form action="1.php" method="post">
        <input type="number" name="nota-1">
        <input type="number" name="nota-2">
        <input type="number" name="nota-3">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

$nota1 = "{$_POST["nota-1"]}";
$nota2 = "{$_POST["nota-2"]}";
$nota3 = "{$_POST["nota-3"]}";
$promedio = ($nota1 + $nota2 + $nota3) / 3;

if($_POST){
    if($promedio > 39){
        echo "Becado";
    } else {
        echo "Estudie";
    }
}

?>