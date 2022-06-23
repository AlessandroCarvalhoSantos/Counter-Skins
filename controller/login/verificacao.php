<?php


require_once __DIR__."/../../vendor/autoload.php";

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassEncryptDecrypt\EncryptDecrypt;
use Model\ClassManagementSession\ManagementSession;
use Model\ClassValidations\Validations;


 
    $sessionPage = new ManagementSession();
    $sessionPage->initializeSession();
 
    //Verificar se existe um POST
    if(isset($_POST['CPF']) && isset($_POST['SENHA'])){
      
        $_SESSION["CPF"] = trim($_POST['CPF']); 
        $_SESSION["SENHA"] = trim($_POST['SENHA']); 


       
        //Verifica se o token de usuário é válido
        if($sessionPage->isValidToken($_SESSION["token"])){ 
           
     

            $validacoesDados = new Validations;  
            $Cpf = $validacoesDados->isValidCPF($_SESSION["CPF"]); //Valida Cpf
         
            
            if($Cpf != false && strlen($_SESSION["SENHA"])>=5 && strlen($_SESSION["SENHA"])<=16){ //Validar Senha e verifica o login

                $connection = new ConnectionMySql("usuarios");
                $connection->executeConnection();
                $sql = "SELECT * FROM usuarios WHERE cpf_usuario = '" . $Cpf . "'";
                $dados =  $connection->execute($sql)->fetchAll(PDO::FETCH_ASSOC);

        
                //Verifica se o usuário existe
                if(count($dados) > 0)
                {
                    //encripta a senha passada
                    $encriptador = new EncryptDecrypt();
                    $password = $encriptador->encrypt($_SESSION["SENHA"]);

           
                    
                    if(strcmp($dados[0]["cpf_usuario"], $Cpf)==0 && strcmp($dados[0]["senha_usuario"], $password)==0){
                        

               
                        $sessionPage->destroySession();
                        session_regenerate_id();
                    
                        $sessionPage->setUserId(intval($dados[0]["id_usuario"]));
                        $sessionPage->setUser($dados[0]['nome_usuario']);
                        $sessionPage->setType("u");
                        $sessionPage->setSaldo($dados[0]['saldo_usuario']);
                        $sessionPage->createTokenSession();

                        header("location: ../home/home.php");
                        exit();
                        
                    }
                    $_SESSION["error"]["SENHA"] = "Senha inválida, tente novamente!";
                }
                else{
                    $_SESSION["error"]["CPF"] = "Usuário não cadastrado, tente novamente!";
                }
                header("location: login.php");
                exit();
            }
            $_SESSION["error"]["CPF"] = "Esse login é inválido, tente novamente!";
            header("location: login.php");
            exit();
        }
        $_SESSION["error"]["accessDanied"] = "Seu token de acesso é inválido!";

        header("location: ../negado/negado.php");
        exit();
    }
    header("location: ../negado/negado.php");
    exit();
?>