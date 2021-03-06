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

 
    $connection->executeConnection();
    $sql = "SELECT * FROM itens ORDER BY RAND()";
    $_SESSION['itens'] =  $connection->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    $pageInitial->setVariablePath("../../");
    $pageInitial->setTitlePage("Compra");
    $pageInitial->setPathPage("view/compra/");
    $pageInitial->setNamePage("compra", "php");
    $pageInitial->execute();
}else{
    header("location: ../login/login.php");
    exit();
}

?>
