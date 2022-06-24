<?php

require_once __DIR__."/../../vendor/autoload.php";

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassFitterPages\FitterPages;
use Model\ClassManagementSession\ManagementSession;
use Model\ClassPagamento\Pagamento;



$sessionPage = new ManagementSession; 
$pageInitial = new FitterPages; 
$connection = new ConnectionMySql; 

$sessionPage->initializeSession(); 



if($sessionPage->isValidToken($_SESSION["token"]) && ($sessionPage->getType() == 'a'|| $sessionPage->getType() == 'u')){

    if(isset($_POST['codItem']) || isset($_SESSION['resposta'])){


        if(!isset($_SESSION['resposta'])){

            $_SESSION['codItem'] = $_POST['codItem'];

            
            $connection->executeConnection();

            $sql = "SELECT * FROM itens where id_item = ".$_SESSION['codItem'];
            $item =  $connection->execute($sql)->fetchAll(PDO::FETCH_ASSOC);

             //Pegar dados do item e adicionar em baixo

            $pagamento = new Pagamento;
            $valores =  array(
                "nome"=> $_SESSION['user'],
                "nome_item"=> $item[0]['nome_item'],
                "valor" => "0.01",
                "cpf" => "13142985778"
            );

            $_SESSION['resposta'] = $pagamento->gerarQrCode($valores);
        }

        if($_SESSION['resposta'] == false){
            $_SESSION['error']['pagamento']= "Erro ao gerar o pagamento";
            header("location: compraItem.php");
            exit();
        }
        else{
            $pageInitial->setVariablePath("../../");
            $pageInitial->setTitlePage("Compra");
            $pageInitial->setPathPage("view/compra/");
            $pageInitial->setNamePage("pagamentoDinheiro", "php");
            $pageInitial->execute();
        }
    }else{
        header("location: ../negado/negado.php");
        exit();
    }
}else{
    header("location: ../login/login.php");
    exit();
}

?>
