


<div class="card shadow text-white" style="height:630px">
    <img  class="card-img-top" src="<?=$this->variablePath . $pathImg?>" alt="Arma de destaque">
    <div class="card-body">
        <div class="card-title fw-bold">
            <?=$titulo?>
        </div>
        <div class="card-text lead" style="font-size:13pt;">
          <?=$descricao?>
        </div>
    </div>

    <div class="card-footer d-flex justify-content-center mb-2">
        <form method="POST" action="<?=$this->variablePath. "controller/compra/compraItem.php"?>">
          <?php
            if($esgotado){
              echo '<input type="hidden" name="codItem" value="'.$id.'">';
              echo '<button type="submit" class="btn btn-outline-warning fw-bold px-5">Comprar</button>';
            }else{
              echo '<button type="button" class="btn btn-outline-danger fw-bold px-5">Esgotado</button>';
            }
          ?>
        </form>
    </div>
</div>