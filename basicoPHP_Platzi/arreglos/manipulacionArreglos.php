<?php

$edades = array(18, 22, 40, 34);

//count -> saber tamaño del arreglo
echo count($edades);
echo "\n";

// array_push
array_push($edades, 98); //Ingresa el elemento al final del arreglo
print_r($edades);

// is_array
$noArray = "";

var_dump(is_array($noArray));
var_dump(is_array($edades));

// explode --> Crea un array a partir de un string
$listaFrutas = "fresa,cereza,manzana";
$listaFrutasArray = explode(",", $listaFrutas);

print_r($listaFrutasArray);

// implode --> Crea un string a partir de un array
$listaFrutasArray2 = ["fresa", "cereza", " manzana"];
$listaFrutas2 = implode(" || ", $listaFrutasArray2);

print_r($listaFrutas2);

echo "\n"; 

