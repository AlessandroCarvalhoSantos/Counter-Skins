<?php

require_once __DIR__."/../../vendor/autoload.php";


use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;


$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 

$sessionPage->initializeSession(); 



if($sessionPage->isValidToken($_SESSION["token"])){

    $pageInitial->setVariablePath("../../");
    $pageInitial->setTitlePage("Home");
    $pageInitial->setPathPage("view/login/");
    $pageInitial->setNamePage("esqueceuSenha", "php");
    $pageInitial->execute();
}else{
    header("location: ../../controller/negado/negado.php");
    exit();
}

?>
