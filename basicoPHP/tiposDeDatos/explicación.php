<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //Strings
    $customer = "Falcao";

    //podemos concatenar de dos maneras
    echo "the customer " .$customer;
    echo "<br>"; 
    echo "the customer {$customer}<br>";

    $favoriteFood = "Panzerotti & Pizza";
    echo "His favorite food is {$favoriteFood}<br>";


    //Números enteros
    $price = 3000;
    echo "that cost {$price}";

    // Floating point number - floats - doubles - real numbers
    $goalRate = 4.5;
    echo "<br>and now he's celebrating his goal rate per match, which is {$goalRate}";

    //Acceder tipo de dato
    $tipoData = gettype($price);
    echo "<br> Tipo de dato de variable price es {$tipoData}";

    $status = true;
    echo "<br>Is {$customer} a champion? That's {$status}";

    
    ?>
</body>
</html>