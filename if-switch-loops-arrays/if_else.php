<?php

$salario = 900000;
$noSubsidioMsg = 'No tiene derecho a subsidio';
$siSubsidioMsg = 'Sí tiene derecho a subsidio';
if ($salario >= 1000000){
    echo $noSubsidioMsg;
} elseif($salario >= 5000000) {
    echo $noSubsidioMsg;
} else {
    echo $siSubsidioMsg;
}

?>

<?php
echo "<br>";
$temperatura = 15;
if($temperatura < 0 || $temperatura > 30){
    echo "El clima no es favorable";
} else {
    echo "Buen clima";
}

?>