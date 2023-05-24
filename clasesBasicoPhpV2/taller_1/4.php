<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Construir el algoritmo que solicite el nombre y edad de 3
personas y determine el nombre de la persona con mayor edad</h4>

    <h3>Digite la edad de los siguientes personajes</h3>
    <form action="4.php" method="post">
        <label>Fulanito</label>
        <input type="number" name="edad-1">
        <label>Sutanito</label>
        <input type="number" name="edad-2">
        <label>Menganito</label>
        <input type="number" name="edad-3">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>

<?php

$fulanito = "{$_POST["edad-1"]}";
$sutanito = "{$_POST["edad-2"]}";
$menganito = "{$_POST["edad-3"]}";

$edadMayor = 0;

for ($i=0; $i < 3; $i++) { 
    
}

?>