<?php


$readonly = "readonly";
$senhaRequired= "";
$nomeBotao = "Atualizar";
$titulo = "Atualizar dados";
$formPost = $this->variablePath."controller/configuracoes/updateDados.php";
include($this->variablePath."view/layout/form/form.php");


unset($_SESSION['usuario']);
?>

