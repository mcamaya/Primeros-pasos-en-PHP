<?php
require_once("../config/conectar.php");

class Registro extends Conectar {
    private $id;
    private $id_camper;
    private $email;
    private $username;
    private $password;

    public function __construct($id=0, $id_camper=0, $email="", $username="", $password="", $dbCn=""){
        $this->id_camper = $id_camper;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;

        parent::__construct($dbCnx);
    }

    public function getId(){
        return $this->id;
    }
    public function setId($newId){
        $this->id = $newId;
    }
    public function getIdCamper(){
        return $this->id_camper;
    }
    public function setIdCamper($newId){
        $this->id_camper = $newId;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($newEmail){
        $this->email = $newEmail;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setUsername($newUser){
        $this->username = $newUser;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($newPass){
        $this->password = $newPass;
    }

    public function insertData(){
        try {
            $stm = $this->dbCnx->prepare("INSERT INTO users (idCamper, email, username, password) values(?,?,?,?)");
            $stm->execute([$this->id_camper, $this->email, $this->username, md5($this->password)]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    

}