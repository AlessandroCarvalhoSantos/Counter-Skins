<?php

require_once __DIR__."/../../vendor/autoload.php";

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages;
$connection = new ConnectionMySql; 

$sessionPage->initializeSession(); 

$connection->executeConnection();

$sql = "SELECT * FROM itens ORDER BY RAND() LIMIT 6";
$_SESSION['itens'] =  $connection->execute($sql)->fetchAll(PDO::FETCH_ASSOC);

if(isset($_SESSION['codItem'])){
    unset($_SESSION['codItem']);
}


$pageInitial->setVariablePath("../../");
$pageInitial->setTitlePage("Home");
$pageInitial->setPathPage("view/home/");
$pageInitial->setNamePage("home", "php");
$pageInitial->execute();

unset($_SESSION['itens']);


?>
