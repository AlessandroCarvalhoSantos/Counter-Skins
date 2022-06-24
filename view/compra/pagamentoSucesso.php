

<section class="container-fluid bg-item-compra full-height py-5">

  <div class="container bg-item-card-compra my-5 p-5">

    <div class="row mb-4 align-itens-center py-5">
        <div class="col-12 text-center ">
            <div>
                <i class="fas fa-check-circle mb-2  text-light" style="font-size:75px;"></i>
            </div>
            <h2 class="fs-cs text-warning">Compra Relizada com sucesso!</h2>
        </div>
        <div class="col-md-6 col-12 text-center offset-md-3  offset-md-0">
            <p class=" text-light fs-6  align-self-center">
                Sua compra foi realizada com sucesso, o item comprado está disponível em
                seu inventário, você pode vende-la ou transferir para sua conta STEAM. Agradeçemos sua compra!!!
            </p>
        </div>

        <div class="col-12 text-center ">
            <a type="button" class="btn btn-outline-success rounded-pill fw-bold px-5 m-auto mt-3 me-2" href="<?=$this->variablePath."controller/inventario/inventario.php"?>">Inventário</a>
            <a type="button" class="btn btn-outline-warning rounded-pill fw-bold px-5 m-auto mt-3" href="<?=$this->variablePath?>">Home</a> 
        </div>
    </div>
    </div>
  </div>

</section>