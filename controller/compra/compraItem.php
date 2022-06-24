<?php

require_once __DIR__."/../../vendor/autoload.php";

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 
$connection = new ConnectionMySql; 

$sessionPage->initializeSession(); 



if($sessionPage->isValidToken($_SESSION["token"]) && ($sessionPage->getType() == 'a'|| $sessionPage->getType() == 'u')){

    if(isset($_POST['codItem']) || isset($_SESSION['codItem'])){

        $sessionPage->initializeSession(); 

        $code = isset($_SESSION['codItem'])?$_SESSION['codItem']:$_POST['codItem'];


        $connection->executeConnection();

        $sql = "SELECT * FROM itens where id_item = ".$code;
        $_SESSION['item'] =  $connection->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        

        $pageInitial->setVariablePath("../../");
        $pageInitial->setTitlePage("Compra");
        $pageInitial->setPathPage("view/compra/");
        $pageInitial->setNamePage("compraItem", "php");
        $pageInitial->execute();

        unset($_SESSION['resposta']);
        unset($_SESSION['codItem']);
        unset($_SESSION['item'] );
        unset($_POST);

    }else{
        header("location: ../negado/negado.php");
        exit();
    }
}else{
    header("location: ../login/login.php");
    exit();
}

?>
