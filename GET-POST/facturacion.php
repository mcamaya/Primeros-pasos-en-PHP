<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="facturacion.php" method="post">
        <select name="criptomoneda">
            <option value="select">Seleccione una moneda</option>
            <option value="bitcoin">Bitcoin</option>
            <option value="ether">Ethereum</option>
            <option value="cardano">Cardano</option>
            <option value="solana">Solana</option>
            <option value="litecoin">Litecoin</option>
        </select>
        <label>Cantidad</label>
        <input type="number" name="quantity">
        <label>Precio Moneda</label>
        <input type="number" name="price">
        <input type="submit" value="send">
    </form>

</body>
</html>

<?php
    
$moneda = $_POST['criptomoneda'];
$cantidad = $_POST['quantity'];
$precio = $_POST['price'];

$math = $cantidad * $precio;

echo "El precio total de {$cantidad} de moneda(s) {$moneda} es de ${$math}";


?>