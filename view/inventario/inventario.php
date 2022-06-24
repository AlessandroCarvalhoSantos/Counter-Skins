
<section class="container-fluid bg-itens py-5">
  <div class="container">

    <?php
      if(!empty($_SESSION['inventario'])){
        echo ' <div class="row">
                  <div class="col pb-4 text-center">
                    <h1 class="fw-bold text-light pb-2 bb-1"> Inventário pessoal</h1>
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
                include $this->variablePath . 'view/layout/componentes/card.php';
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