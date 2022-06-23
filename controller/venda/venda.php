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
    $pageInitial->setTitlePage("Venda");
    $pageInitial->setPathPage("view/venda/");
    $pageInitial->setNamePage("venda", "php");
    $pageInitial->execute();
}else{
    header("location: ../login/login.php");
    exit();
}

?>
