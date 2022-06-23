<?php

require_once __DIR__."/../../vendor/autoload.php";


use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 

$sessionPage->initializeSession(); 

$sessionPage->initializeSession(); 

if(isset($_SESSION['token']) && ($_SESSION['type']=='a' || $_SESSION['type']=='u')){
    $sessionPage->destroySession(); 
    session_regenerate_id(); 
}


$pageInitial->setVariablePath("../../");
$pageInitial->setTitlePage("Negado");
$pageInitial->setPathPage("view/negado/");
$pageInitial->setNamePage("negado", "php");
$pageInitial->execute();


?>
