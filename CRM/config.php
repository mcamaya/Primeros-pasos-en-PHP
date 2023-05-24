<?php

require_once("db.php");

class Config {

    //mapeando columnas de la tabla con atributos de la clase
    private $id;
    private $nombres;
    private $direccion;
    private $logros; 

    protected $dbConx; //conexión a la base de datos

    public function __construct($id = 0, $nombres = "", $direccion = "", $logros = ""){
        $this->id = $id;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;

        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
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


    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO campers (nombres, direccion, logros) values(?,?,?)");     //stm = statement
            $stm -> execute([$this->nombres, $this->direccion, $this->logros]);
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

}


