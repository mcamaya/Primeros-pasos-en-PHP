<?php

$dinero = readline("Ingresa la cantidad de dinero disponible: ");

if($dinero >= 100){
    echo "Puedes retirar tus ganacias";
} elseif($dinero < 0) {
    echo "Heeey! Tienes deudas por pagar >:( ";
} else {
    echo "No tienes lo suficiente como para retirar";
}

echo "\n";