<?php
require_once("../config/conectar.php");

class Login extends Conectar {
    private $id;
    private $email;
    private $password;

    public function __construct($id=0, $email="", $password="", $dbCnx=""){
        $this->id = $id;
        $this->email = $email;
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

    public function fetchAll(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM users");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function login(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
            $stm->execute([$this->email, MD5($this->password)]);
            $user = $stm->fetchAll();
            if(count($user) > 0){
                session_start();
                $_SESSION['id'] = $user[0]['id'];
                $_SESSION['email'] = $user[0]['email'];
                $_SESSION['password'] = $user[0]['password'];

                return true;
            } else {
                false;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}

