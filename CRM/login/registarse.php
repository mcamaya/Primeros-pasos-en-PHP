<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

if(isset($_POST['signup'])){
    require_once("registroUsuarios.php");
    $registro = new Registro();

    $registro->setIdCamper(4);
    $registro->setEmail($_POST['email']);
    $registro->setUsername($_POST['username']);
    $registro->setPassword($_POST['password']);

    $registro->insertData();
    echo "<script>alert('Usuario registrado con éxito');document.location='loginRegister.php';</script>";
}