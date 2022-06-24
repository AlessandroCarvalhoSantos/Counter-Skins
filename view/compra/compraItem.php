<?php

    $erro = "";
    if(isset($_SESSION['error']['pagamento'])){
        $erro = '<div class="col-12">';

        $erro .='<div class="alert bg-danger text-center text-light p-0 py-1">';
            $erro .='<strong>Atenção! </strong>'. $_SESSION['error']['pagamento'];
        $erro.='</div>';
        $erro .= '</div>';
        unset($_SESSION['error']['pagamento']);
    }

    $nome = $_SESSION['item'][0]['nome_item'];
    $pathImg = $this->variablePath . $_SESSION['item'][0]['imagem_item'];
    $descricao = $_SESSION['item'][0]['descricao_item'];
    $id = $_SESSION['item'][0]['id_item'];
?>


<section class="container-fluid bg-item-compra py-5">

  <div class="container bg-item-card-compra my-5 p-5">

    <div class="row g-5 row-cols-1 row-cols-md-3 g-4 text-light">

        <div class="col-8">
            <h1 class="text-center  fs-cs text-warning"><?=$nome?></h1>
            <img  class="img-fluid"  src="<?= $pathImg;?>" alt="Arma de destaque">
        </div>


        <div class="col-4 border-start border-warning  px-5 py-2">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center  fs-cs text-warning">Detalhes</h2>

                    <?php include "compraItemComponetes/progressBar.php"?>
                    <p style="text-align:justify;">
                        <?=$descricao;?>
                    </p>
                        
                </div>

                <div class="col-12">
                    <h2 class="text-center  fs-cs text-warning">Teste</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex blanditiis inventore !</p>
                </div>

                <?=$erro;?>

                <div class="col-12">
                    <h6 class=" bb-1 pb-2"> Pagamento:</h6>
                    
                    <?php include "compraItemComponetes/buttons.php"?>
                   
                </div>
            </div>
        </div>   
    </div>
  </div>

</section>