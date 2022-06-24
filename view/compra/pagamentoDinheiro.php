<?php

    $erro = "";
    if(isset($_SESSION['error']['confirmarPagamento'])){
        $erro = '<div class="row justify-content-center mb-4">';
            $erro .= '<div class="col-md-6 col-12">';
                $erro .='<div class="alert bg-danger text-center text-light p-0 py-1">';
                    $erro .='<strong>Atenção! </strong>'. $_SESSION['error']['confirmarPagamento'];
                $erro.='</div>';
            $erro .= '</div>';
        $erro .= '</div>';
        unset($_SESSION['error']['confirmarPagamento']);
    }

    $image = base64_encode($_SESSION['resposta']['image']);
    $id = $_SESSION['resposta']['codeID']

?>


<section class="container-fluid bg-item-compra py-5">

  <div class="container bg-item-card-compra my-5 p-5">

    <div class="row mb-4">
        <div class="col-12 text-light text-center">
            <h3>Pagamento via PIX</h3>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-md-4 col-12">
            <img  class="img-fluid" src="data:image/png;base64,<?= $image?>">
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-md-6 col-12 fw-bold text-center" style="word-wrap: break-word;">
            <?=$_SESSION['resposta']['codePiX']?>
        </div>
    </div>
    

    <?=$erro?>

    <div class="row justify-content-center">
        <div class="col-md-6 col-12 fw-bold text-center">
            <div class="d-flex justify-content-center">
                <form method="POST">
                    <input type="hidden" name="codeID" value="<?=$id?>">
                    <button type="submit" formaction="<?=$this->variablePath. "controller/compra/confirmarPagamento.php"?>" class="btn btn-outline-warning fw-bold px-4 me-1">Confirmar Pagamento</button>
                    <a href="<?=$this->variablePath. "controller/compra/compraItem.php"?>" class="btn btn-outline-danger fw-bold px-3">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

    </div>
  </div>

</section>