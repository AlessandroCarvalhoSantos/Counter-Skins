<?php

require_once __DIR__."/../../vendor/autoload.php";

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 

$sessionPage->initializeSession(); 



if($sessionPage->isValidToken($_SESSION["token"]) && ($sessionPage->getType() == 'a'|| $sessionPage->getType() == 'u')){

    $connection = new ConnectionMySql;
    $connection->executeConnection();

    $sql = "SELECT * FROM itens";
    $_SESSION['inventario'] =  $connection->execute($sql)->fetchAll(PDO::FETCH_ASSOC);

    $pageInitial->setVariablePath("../../");
    $pageInitial->setTitlePage("Inventário");
    $pageInitial->setPathPage("view/inventario/");
    $pageInitial->setNamePage("inventario", "php");
    $pageInitial->execute();
}else{
    header("location: ../login/login.php");
    exit();
}

?>
