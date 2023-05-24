<?php  //Arreglos asociativos

$edades = array(
    "Carlos" => 18,
    "Sofia" => 25,
    "Juan" => 40
);

echo "\n";


$cafes = array(
    "Capuccino" => 5000,
    "Latte" => 4200,
    "Americano" => 25000
);

echo "El precio del Capuccino es de $ {$cafes["Capuccino"]}"; //Importante los {}
echo "\n";

$personas = array(
    "Estefanía" => array(
        "edad" => 20,
        "apellido" => "Bejarano"
    ),
    "Mr. Michi" => array(
        "edad" => 5,
        "apellido" => "Michisancio"
    ),
);

echo "La info. de Mr. Michi es:\n\tEdad: " . $personas["Mr. Michi"]["edad"] . "\n\tApellido: " . $personas["Mr. Michi"]["apellido"]; //Importante los {}
echo "\n";
