<?php

$hora = "03:00 A.M.";
switch ($hora) {
    case "06:00 A.M.":
        echo "Tienes software review";
        break;

    case "08:00 A.M.":
        echo "Tienes SER";
        break;
    
    case "09:00 A.M.":
        echo "Tienes inglés";
        break;

    case "10:30 A.M.":
        echo "Tienes software skills";
        break;

    case "02:00 P.M.":
        echo "La jornada ha terminado";
        break;

    default:
        echo "Descansa";
}

?>