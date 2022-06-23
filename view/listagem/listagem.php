<div class="container-lg p-0 pb-0">

    <?php
        if(isset($_SESSION['sucesso'])){

        echo' <div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo '<strong>Sucesso: </strong>'.$_SESSION['sucesso'];
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo'</div>';

        unset($_SESSION['sucesso']);
        }
    ?>

    <h1 class="text-center my-5">Listagem de Pessoas Cadastradas</h1>

    <div class="table-responsive">
        <table class="table m-0 table-bordered text-center table-striped">

            <?php
                include_once "tableHeader.php";
                include_once "tableBody.php";
            ?>

        </table> 
    </div>
</div>

<?php
    unset($_SESSION['dadosUsers']);
?>