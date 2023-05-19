<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="post"> <!-- action: indica la url de la aplicación del servidor, que procesa los datos del formulario -->
        <label>User</label>
        <input type="text" name="user">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" value="send">
    </form> 
</body>
</html>

<?php

/* No es muy seguro usar método GET ya que los datos del formulario se muestran el la url
echo "{$_GET["user"]} <br>"; 
echo "{$_GET["password"]}<br>"; */

echo "{$_POST["user"]} <br>"; 
echo "{$_POST["password"]} <br>"; 

//Usamos GET para filtros, ordenamientos, búsquedas
//Usamos POST para transferir datos


?>