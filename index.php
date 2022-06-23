<?php

require_once __DIR__."/vendor/autoload.php";

use Model\ClassDatabase\CreateTables;
use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 

$sessionPage->initializeSession(); 



$tables = new CreateTables();
$tables->verifyTables();



$pageInitial->setVariablePath("");
$pageInitial->setTitlePage("Home");
$pageInitial->setPathPage("view/home/");
$pageInitial->setNamePage("home", "php");
$pageInitial->execute();




?>
