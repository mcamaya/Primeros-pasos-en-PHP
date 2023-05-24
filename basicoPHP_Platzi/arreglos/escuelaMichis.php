<?php

$escuelaMichis = array(
    array(
        'nombre' => 'Nieve Michi',
        'ocupacion' => 'Dormilón',
        'color' => 'Blanco',
        'comidas' => array(
            "favoritas" => array("Queso azul", "Sopa de la abuela", "Calabaza"),
            "wuacala" => array("Carne", "Pollo", "Brocoli")
        )
    ), array(
        'nombre' => 'Azúcar Michi',
        'ocupacion' => 'Comelón',
        'color' => 'Gris',
        'comidas' => array(
            "favoritas" => array("Espinacas", "Pasta", "Pescado", "Guanábana"),
            "wuacala" => array("Tomate", "Papa")
        )
    ), array(
        'nombre' => 'Alfa Michi',
        'ocupacion' => 'Juguetón',
        'color' => 'Naranja',
        'comidas' => array(
            "favoritas" => array("Fresas", "Pastel", "Gelatina"),
            "wuacala" => array("Lechuga", "Tomate", "Aceitunas")
        )
    )
);

echo "Las comidas fav de {$escuelaMichis['0']['nombre']} son " . implode(", ", $escuelaMichis['0']['comidas']['favoritas']);
echo "\n";