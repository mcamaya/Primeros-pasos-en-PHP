<?php

$comida = array("Panzerotti", "Pizza", "Sushi", "Sopa", "Pescado");

echo $comida[0] . "<br>";
echo $comida[1] . "<br>";
echo $comida[2] . "<br>";
echo $comida[3] . "<br>";
echo $comida[4] . "<br>";

echo "<br>";
echo "Usando el foreach: <br>";
echo "<br>";

foreach ($comida as $bocado) {
    echo $bocado . "<br>";
}

echo "<br>";
echo "Aplicando métodos: <br>";
echo "<br>";

array_pop ($comida); //eliminar el final
array_shift ($comida); //eliminar el comienzo
array_push ($comida, "Camarones"); //Añade al final

foreach ($comida as $bocado) {
    echo $bocado . "<br>";
}


?>