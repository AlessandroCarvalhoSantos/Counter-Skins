<?php

require_once __DIR__."/../../vendor/autoload.php";

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;
use Model\ClassPagamento\Pagamento;



$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 
$connection = new ConnectionMySql; 

$sessionPage->initializeSession(); 



if($sessionPage->isValidToken($_SESSION["token"]) && ($sessionPage->getType() == 'a'|| $sessionPage->getType() == 'u')){

    if(isset($_POST['codeID'])){

      
        
        $pagamento = new Pagamento;

        $resposta = $pagamento->consultarPagamento($_POST['codeID']);

        if($resposta !== true){
            $_SESSION['error']['confirmarPagamento'] = $resposta;
            header("location: compraDinheiro.php");
            exit();
        }
        else{

            //Inserir dados no banco

            $pageInitial->setVariablePath("../../");
            $pageInitial->setTitlePage("Compra");
            $pageInitial->setPathPage("view/compra/");
            $pageInitial->setNamePage("pagamentoSucesso", "php");
            $pageInitial->execute();

            unset($_SESSION['resposta']);
        }

    
        
    }else{
        header("location: ../negado/negado.php");
        exit();
    }
}else{
    header("location: ../login/login.php");
    exit();
}

?>