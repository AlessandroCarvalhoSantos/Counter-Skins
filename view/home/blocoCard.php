<section class="container py-5">

    <div class="row">
      <div class="col pb-4 text-center">
        <h1 class="fw-bold"> Destaques do mercado</h1>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">

    <?php
        for($i=0; $i<6; $i++){
            echo '<div class="col">';
                $descricao = $_SESSION['itens'][$i]['descricao_item'];
                $titulo = $_SESSION['itens'][$i]['nome_item'];
                $pathImg = $_SESSION['itens'][$i]['imagem_item'];;
                include $this->variablePath . 'view/layout/componentes/card.php';
            echo '</div>';
        }
    ?>
   
    </div>

</section>