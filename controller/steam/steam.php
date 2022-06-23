<?php

require_once __DIR__."/../../vendor/autoload.php";

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 

$sessionPage->initializeSession(); 



$pageInitial->setVariablePath("../../");
$pageInitial->setTitlePage("Login Steam");
$pageInitial->setPathPage("view/steam/");
$pageInitial->setNamePage("steam", "php");
$pageInitial->execute();


?>
