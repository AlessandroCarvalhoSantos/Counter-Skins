<?php

require_once __DIR__."/../../vendor/autoload.php";

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 

$sessionPage->initializeSession(); 



if($sessionPage->isValidToken($_SESSION["token"]) && ($sessionPage->getType() == 'a'|| $sessionPage->getType() == 'u')){

    $pageInitial->setVariablePath("../../");
    $pageInitial->setTitlePage("Pagamento com saldo");
    $pageInitial->setPathPage("view/compra/");
    $pageInitial->setNamePage("pagamentoSaldo", "php");
    $pageInitial->execute();
}else{
    header("location: ../login/login.php");
    exit();
}

?>
