<?php

echo "<div class='row mt-2 mt-4 g-3' id='content-telefone'>";


echo '<div class="col-12 ">';
echo '<h2 class="text-center">Contatos</h2>';
echo'</div>';


if(isset($_SESSION['usuario']["telefones"][0])){

    for($i=0; $i<count($_SESSION['usuario']["telefones"]); $i++){

        $telefone = $_SESSION['usuario']["telefones"][$i]['telefone'];
        $id = $_SESSION['usuario']["telefones"][$i]['id'];


        echo '<div class="col-12 col-md-3">';
            echo '<label for="inputNome" class="form-label"><b> <span class="n-tel">'.($i+1).'</span>° Telefone:</b></label>';
            echo '<i class="fas fa-trash ms-5" style="cursor:pointer;" onclick="removeTel(this)"></i> &nbsp;';
            echo '<input hidden type="text" class="form-control shadow-none"  name="telefoneId[]" maxlength="25" value="'.$id.'" >';
            echo '<input type="text" required class="form-control shadow-none" oninput="numberMask(this)" name="telefone[]" maxlength="25" value="'.$telefone.'">';
           
        echo'</div>';
    }
}

echo "</div>";

echo "<div class='row mt-2 gy-0'>";

    echo '<div class="col-12 align-self-end mt-5 justify-content-center d-flex" >';
    echo '<button type="button" onclick="insertTel();" class="btn btn-primary shadow-none rounded-pill fw-bold px-5">Adicionar telefone</button>';
    echo'</div>';

echo "</div>";


?>



