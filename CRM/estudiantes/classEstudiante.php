<?php

require_once("../config/conectar.php");

class Estudiante extends Conectar {

    //mapeando columnas de la tabla con atributos de la clase
    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    private $ser; 
    private $ingles; 
    private $skills; 
    private $especialidad; 
    private $asistencia; 

    public function __construct($id = 0, $nombres = "", $direccion = "", $logros = "", $ser="", $ingles="", $skills="", $especialidad="", $asistencia="", $dbCnx=""){
        $this->id = $id;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;
        $this->ser = $ser;
        $this->ingles = $ingles;
        $this->skills = $skills;
        $this->especialidad = $especialidad;
        $this->asistencia = $asistencia;

        parent::__construct($dbCnx);
    }

    public function setId($idNum){
        $this->id = $idNum;
    }
    public function getId(){
        return $this->id;
    }

    public function setNombre($nombres){
        $this->nombres = $nombres;
    }
    public function getNombre(){
        return $this->nombres;
    }
    
    public function setDireccion($address){
        $this->direccion = $address;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    public function setLogros($logros){
        $this->logros = $logros;
    }
    public function getLogros(){
        return $this->logros;
    }

    public function setSer($ser){
        $this->ser = $ser;
    }
    public function getSer(){
        return $this->ser;
    }

    public function setIngles($ingles){
        $this->ingles = $ingles;
    }
    public function getIngles(){
        return $this->ingles;
    }

    public function setSkills($skills){
        $this->skills = $skills;
    }
    public function getSkills(){
        return $this->skills;
    }

    public function setEspecialidad($especialidad){
        $this->especialidad = $especialidad;
    }
    public function getEspecialidad(){
        return $this->especialidad;
    }

    public function setAsistencia($asistencia){
        $this->asistencia = $asistencia;
    }
    public function getAsistencia(){
        return $this->asistencia;
    }


    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO campers (nombres, direccion, logros, ser, ingles, skills, especialidad, asistencia) values(?,?,?,?,?,?,?,?)");     //stm = statement
            $stm -> execute([$this->nombres, $this->direccion, $this->logros, $this->ser, $this->ingles, $this->skills, $this->especialidad, $this->asistencia]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function obtainAll(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM campers");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(){
        try {
            $stm = $this->dbCnx->prepare("DELETE FROM campers WHERE id = ?");
            $stm -> execute(array($this->id));
            return $stm -> fetchAll(); //Me regresa todas las filas excepto la que fue eliminada
            echo "<script>alert('Dato borrado satisfactoriamente');document.location='estudiantes.php';</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //UPDATE
    public function selectOne(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * from campers WHERE id = ?");
            $stm -> execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(){
        try {
            $stm = $this->dbCnx->prepare("UPDATE campers SET nombres = ?, direccion = ?, logros = ?, ser = ?, ingles = ?, skills = ?, especialidad = ?, asistencia = ? WHERE id = ?");
            $stm->execute([$this->nombres, $this->direccion, $this->logros, $this->ser, $this->ingles, $this->skills, $this->especialidad, $this->asistencia, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}


