<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

require_once("classEstudiante.php");
$record = new Estudiante();

if (isset($_GET['id']) && isset($_GET['req'])){ //    req --> request
    if ($_GET['req'] == 'delete'){
        $record -> setId($_GET['id']);
        $record -> delete();
        echo "<script>alert('Dato borrado satisfactoriamente');document.location='estudiantes.php';</script>";
    }
}