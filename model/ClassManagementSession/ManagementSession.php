<?php

namespace Model\ClassManagementSession;

use Exception;
use Model\ClassValidations\Validations;



class ManagementSession{

    // tipos de usuários e senhas para criar tokens
    private $typeUsers = [
        "a" => "iS49GR6Rnag6uYslrh4C", // Administrador
        "u" => "iS49GRasdASDADAfgaff", // User
        "g" => "yY0i8P1TQa4UraYN1j8F" // Usuário sem cadastro
    ];

    private $type;
    private $user;
    private $userId;
    private $saldo;

    private $sessionId;
    private $token;
    private $key;

    private $validator;

    public function __construct(){
        $this->validator = new Validations;
    }

    //Validando e setando o tipo de usuário
    public function setType($value){
        if($this->validator->isValidValueString($value)){
            $value = $this->validator->treatmentTypeString($value);
            if(array_key_exists($value, $this->typeUsers)){
                $this->type = $value;
                return true;
            }
            echo new Exception("Esse tipo de usuário não é aceito.");
            return false;
        }
    }

    public function getType(){
        return $this->type;
    }



    //Validando e setando o nome do usuário
    public function setUser($value){

        if($this->validator->isValidValueString($value)){
            $this->user = $this->validator->treatmentTypeString($value);
            return true;
        }
        return false;
    }

    public function getUser(){
        return $this->user;
    }

    
    //Validando e setando o nome do usuário
    public function setUserId($value){

        if($this->validator->isValidValueNumber($value)){
            $this->userId = intval($value);
        }
    }

    public function setSaldo($value){
        $this->saldo = $value;
    }

    public function getUserId(){
        return $this->userId;
    }


    //Criando uma senha e criando um token com base nessa senha
    private function generateToken(){

        //A cheve é gerada a partir de uma senha interna e sessão atual do usuário
        $this->key = $this->typeUsers[$this->type] . $this->sessionId;
        return password_hash($this->key, PASSWORD_BCRYPT);
    }


    //Verificando se o token é válido
    public function isValidToken($value){
        
        if(password_verify($this->key, $value)){
            return true;
        }
        return false;
    }

    //destruindo toda a sessão atual
    public function destroySession(){

        session_unset();

        $this->type = null;
        $this->user = null;
        $this->userId = null;
        $this->sessionId = null;
        $this->saldo = null;
        $this->token = null;
        $this->key = null;
        return true;
    }



    //inciando uma sessão ou pegando uma sessão existente
    public function initializeSession(){

        if(!isset($_SESSION["token"])){ 
            session_name("desafioCrud");
            session_start();
            $this->sessionId = session_id();
            if(isset($_SESSION["token"])){
                $this->type = $_SESSION['type'];
                $this->user = $_SESSION['user'];
                $this->userId = $_SESSION['userId'];
                $this->saldo = $_SESSION['saldo'];
                $this->key = $this->typeUsers[$this->type] . $this->sessionId;
            }

    
            return true;
        }
        return false;
    }
 
    //Criando token da sessão
    public function createTokenSession(){

        if(!isset($_SESSION["token"])){
            
            $this->sessionId = session_id();
            $code = $this->generateToken();

            if($code !== false){
                $this->token = $code;

                $_SESSION['type'] = $this->type;
                $_SESSION['user'] = $this->user;
                $_SESSION['userId'] = $this->userId;
                $_SESSION['token'] = $this->token;
                $_SESSION['saldo'] = $this->saldo;

                return true;
            }
            else{
                session_unset();
                echo new Exception("Error ao gerar o token de acesso");
                return false;
            }

        }
        return false;
    }
}


?>