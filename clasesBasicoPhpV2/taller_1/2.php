<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dado un número indicar si es par o impar y si es mayor de 10</h4>
    <h3>Por favor digite un número</h3>
    <form action="2.php" method="get">
        <input type="number" name="numero">
        <input type="submit" value="Send">
    </form>
    
</body>
</html>

<?php

$num = "{$_GET["numero"]}";

if($num % 2 == 0) {
    echo "Es un número par <br>";
} else {
    echo "Es un número impar <br>";
}

if($num > 10) {
    echo "Es un número mayor que diez <br>";
} elseif ($num == 10) {
    echo "El número es igual a diez <br>";
} else {
    echo "Es un número menor que diez <br>";
}

?>