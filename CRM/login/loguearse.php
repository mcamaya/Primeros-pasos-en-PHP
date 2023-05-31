<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

if(isset($_POST['login'])){

    require_once("loginUsuarios.php");

    $credenciales = new Login();

    var_dump($_POST['email']);
    var_dump($_POST['password']);

    $credenciales->setEmail($_POST['email']);
    $credenciales->setPassword($_POST['password']);

    var_dump($credenciales->getEmail());
    var_dump($credenciales->getPassword());

    $login = $credenciales->login();
    var_dump($login);

    if($login){
        header('Location: ../home/home.php');
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
    }
}