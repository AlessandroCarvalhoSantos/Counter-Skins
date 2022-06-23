<?php

require_once __DIR__."/../../vendor/autoload.php";


use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 

$sessionPage->initializeSession(); 

if(isset($_SESSION['token']) && ($_SESSION['type']=='a' || $_SESSION['type']=='u')){
    $sessionPage->destroySession(); 
    session_regenerate_id(); 
}


$sessionPage->setType("g"); 
$sessionPage->setUser("Anonimo"); 
$sessionPage->setUserId('0'); 
$sessionPage->createTokenSession(); 



$pageInitial->setVariablePath("../../");
$pageInitial->setTitlePage("Login");
$pageInitial->setPathPage("view/login/");
$pageInitial->setNamePage("login", "php");
$pageInitial->execute();


?>
