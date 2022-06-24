
<section class="container-fluid bg-itens py-5">
  <div class="container">

    <?php
      if(!empty($_SESSION['inventario'])){
        echo ' <div class="row">
                  <div class="col pb-4 text-center">
                    <h1 class="fw-bold text-light pb-2 bb-1 mt-5"> Inventário pessoal</h1>
                  </div>
                </div>';

        echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
        for($i=0; $i<count($_SESSION['inventario']); $i++){
            echo '<div class="col">';
                $descricao = $_SESSION['inventario'][$i]['descricao_item'];
                $titulo = $_SESSION['inventario'][$i]['nome_item'];
                $pathImg = $_SESSION['inventario'][$i]['imagem_item'];
                $id = $_SESSION['inventario'][$i]['id_item'];
                $esgotado = $_SESSION['inventario'][$i]['estoque'] == "S"?true:false;
     
                ?>

                <div class="card shadow text-white" style="height:680px">
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
                        <form method="POST">
                          
                          <input type="hidden" name="codItem" value="<?=$id?>">
    
                          <button type="submit" formaction="<?=$this->variablePath. "controller/venda/venda.php"?>" class="btn btn-outline-warning fw-bold px-4 me-1">Vender</button>
                          <button type="submit" formaction="<?=$this->variablePath. "controller/compra/resgaste.php"?>" class="btn btn-outline-success fw-bold px-3">Resgatar</button>
                        </form>
                    </div>
                </div>
    
    <?php
            echo '</div>';
        }
        echo '</div>';
      }
      else{
        echo '<div class="container-fluid full-height row align-items-center m-0 p-0 g-0">

          <div class="col text-center ">
              <div>
                  <i class="fas fa-box  mb-2  text-light"  style="font-size:75px;"></i>
              </div>
              <h2 class="fs-cs text-warning">Inventário pessoal</h2>
              <p class="fs-cs text-light">Infelismente você não possúi nenhum item em seu inventário.</p>
              <a type="button" class="btn btn-warning rounded-pill fw-bold px-5 m-auto mt-3" href="'.$this->variablePath.'">Home</a>
          </div>

        </div>';
      }
    ?>
   

  </div>

</section>