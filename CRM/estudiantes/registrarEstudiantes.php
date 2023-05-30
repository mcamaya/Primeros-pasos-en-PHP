<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


if(isset($_POST['guardar'])){
    require_once("classEstudiante.php");

    $config = new Estudiante();

    $config->setNombre($_POST["nombres"]);
    $config->setDireccion($_POST["direccion"]);
    $config->setLogros($_POST["logros"]);
    $config->setSer($_POST["ser"]);
    $config->setIngles($_POST["ingles"]);
    $config->setSkills($_POST["skills"]);
    $config->setEspecialidad($_POST["especialidad"]);
    $config->setAsistencia($_POST["asistencia"]);


    $config->insertData();

    echo "<script>alert('Los datos fueron guardados exitosamente'); document.location='estudiantes.php';</script>";
}

?>