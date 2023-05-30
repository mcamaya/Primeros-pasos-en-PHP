<?php

do {
    echo "Esto lo ejecutamos la menos una vez";
} while(false);

echo "\n";



$usernames = ["pepito123", "rositafresita", "fulanodetal"];

do {
    $username = readline('Por favor, ingresa tu nuevo nombre de usuario: ');
} while (in_array($username, $usernames));

echo "\n";
