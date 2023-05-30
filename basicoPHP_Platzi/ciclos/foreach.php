<?php

// foreach($iterable as $valor)
// foreach($iterable as $llave => $valor)

$coffeeShop = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);


foreach ($coffeeShop as $price) {
    echo "El café cuesta $$price USD" . "\n";;
}

echo "\n";
echo "\n";

foreach ($coffeeShop as $cafe => $price) {
    echo "El café $cafe cuesta $$price USD" . "\n";;
}

echo "\n";


