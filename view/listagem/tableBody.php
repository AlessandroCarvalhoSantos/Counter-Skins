<tbody>



    <?php

    for($i=0; $i<count($_SESSION['dadosUsers']); $i++){
        echo "<tr>";   

        echo "<td>". ($i+1) ."</td>";
        echo "<td>". $_SESSION['dadosUsers'][$i]["nome"]."</td>";
        echo "<td>". $_SESSION['dadosUsers'][$i]["cpf"]."</td>";
        echo "<td class='d-none d-md-table-cell'>". $_SESSION['dadosUsers'][$i]["data_nascimento"]."</td>";
        echo '<td>
                <form method="POST" action="'.$this->variablePath.'controller/listagem/edicao.php">
                    <input type="hidden" name="codPessoa" value="'.$_SESSION['dadosUsers'][$i]["id"].'">
                    <button  class="btn shadow-none w-100 h-100 rounded-0 fw-bold text-light p-0" type="submit">
                        <i class="fas fa-edit  text-primary"></i>
                    </button>
                </form>
            </td>';

        echo '<td class="bg-danger">
                <form method="POST" action="'.$this->variablePath.'controller/listagem/excluir.php">
                    <input type="hidden" name="codPessoa" value="'.$_SESSION['dadosUsers'][$i]["id"].'">
                    <button  class="btn shadow-none w-100 h-100 rounded-0 fw-bold text-light p-0" type="submit">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </td>';
        

        echo "</tr>";
    }
      
    ?>
   
</tbody>