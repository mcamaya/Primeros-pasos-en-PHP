<?php

$coffeeShop = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($coffeeShop as $cafe => $precio) {

    echo "Actualmente encontré al café $cafe \n";

    if($cafe == 'Capuccino'){
        echo "Encontramos a Capuccino!!! \n";
        break;
    }
    
}

echo "\n";

foreach ($coffeeShop as $cafe => $precio) {

    if($cafe == 'Recalentado')
        continue; //salta el elemento
    
    echo "El café $cafe es muy rico! \n";

    
}