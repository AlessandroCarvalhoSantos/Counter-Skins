<?php

if(isset($_SESSION['usuario'][0]['data_exclusao'])){
    $dtExclusao= $_SESSION['usuario'][0]['data_exclusao'];
}else{
    $dtExclusao="";
}

if(isset($_SESSION['usuario'][0]['data_atualizacao'])){
    $dtAtualizacao= $_SESSION['usuario'][0]['data_atualizacao'];
}else{
    $dtAtualizacao="";
}


if(isset($_SESSION['usuario'][0]['cpf'])){
    $cpf= $_SESSION['usuario'][0]['cpf'];
    
}else{
    $cpf="";
}



if(isset($_SESSION['usuario'][0]['rg'])){
    $rg= $_SESSION['usuario'][0]['rg'];
}else{
    $rg="";
}

if(isset($_SESSION['usuario'][0]['data_nascimento'])){
    $dtNascimento= $_SESSION['usuario'][0]['data_nascimento'];
}else{
    $dtNascimento="";
}

if(isset($_SESSION['usuario'][0]['data_cadastro'])){
    $dtCadastro= $_SESSION['usuario'][0]['data_cadastro'];
}else{
    $dtCadastro=Date('Y-m-d');
}



if(isset($_SESSION['usuario'][0]['nome'])){
    $nome = $_SESSION['usuario'][0]['nome'];
}else{
    $nome="";
}


if(isset($_SESSION['usuario'][0]['endereco'])){
    $endereco = $_SESSION['usuario'][0]['endereco'];
}else{
    $endereco="";
}

if(isset($_SESSION['usuario'][0]['cep'])){
    $cep = $_SESSION['usuario'][0]['cep'];
}else{
    $cep="";
}

if(isset($_SESSION['usuario'][0]['numero'])){
    $numero = $_SESSION['usuario'][0]['numero'];
}else{
    $numero="";
}




if(isset($_SESSION['usuario'][0]['ufSigla'])){
    $uf = $_SESSION['usuario'][0]['ufSigla'];
}else{
    $uf="";
}

if(isset($_SESSION['usuario'][0]['endereco_id'])){
    $enderecoId = $_SESSION['usuario'][0]['endereco_id'];
}else{
    $enderecoId=0;
}


if(isset($_SESSION['usuario'][0]['id'])){
    $pessoaId = $_SESSION['usuario'][0]['id'];
}else{
    $pessoaId=0;
}


if(isset($_SESSION['usuario'][0]['senha1'])){
    $senha1 = $_SESSION['usuario'][0]['senha1'];
}else{
    $senha1="";
}

if(isset($_SESSION['usuario'][0]['senha2'])){
    $senha2 = $_SESSION['usuario'][0]['senha2'];
}else{
    $senha2="";
}

?>





<div class=" p-5" style="background-color: rgb(240, 240, 240);">

    <?php
        if(isset($_SESSION['errorForm'])){

            echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo '<strong>Aviso: </strong>'.$_SESSION['errorForm'];
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo'</div>';

            unset($_SESSION['errorForm']);
        }

        if(isset($_SESSION['sucesso'])){

            echo' <div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo '<strong>Sucesso: </strong>'.$_SESSION['sucesso'];
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo'</div>';

            unset($_SESSION['sucesso']);
        }
    
    ?>
    
    <form method="POST"  class="row g-3" action="<?=$formPost?>">
           
            <div class="col-12  text-center text-md-start">
                <h3 class="m-0 mb-1 pt-2 fw-bold"><?=$titulo?></h3>
            </div>

            <input type="date" hidden class="form-control shadow-none"  name="data_atualizacao" value="<?=$dtAtualizacao?>">
            <input type="date" hidden class="form-control shadow-none"  name="data_exclusao" value="<?=$dtExclusao?>">
            <input type="text" hidden class="form-control shadow-none"  name="endereco_id" value="<?=$enderecoId?>">
            <input type="text" hidden class="form-control shadow-none"  name="id" value="<?=$pessoaId?>">



            <div class="col-md-3">
                <label class="form-label"><b>CPF:</b></label>
                <input type="text" class="form-control shadow-none" oninput="cpfMask(this)" name="cpf" maxlength="11" value="<?=$cpf?>" required <?=$readonly?>>
            </div>

            <div class="col-md-3">
                <label class="form-label"><b>RG:</b></label>
                <input type="text" class="form-control shadow-none" oninput="string(this)" name="rg" maxlength="20" required value="<?=$rg?>">
            </div>

            <div class="col-md-3">
                <label  class="form-label"><b>Data de nascimento:</b></label>
                <input type="date" class="form-control shadow-none"  name="data_nascimento" required value="<?=$dtNascimento?>">
            </div>

            <div class="col-md-3">
                <label class="form-label"><b>Data de Cadastro:</b></label>
                <input type="date" class="form-control shadow-none"  name="data_cadastro" readonly required value="<?=$dtCadastro?>">
            </div>

            <div class="col-md-12">
                <label class="form-label"><b>Nome:</b></label>
                <input type="text" class="form-control shadow-none" oninput="string(this)" name="nome" maxlength="50" required value="<?=$nome?>">
            </div>


            <div class="col-md-6">
                <label class="form-label">Senha:</label>
                <input type="password" class="form-control shadow-none" oninput="string(this)" name="senha1"  minlength="5" maxlength="16" <?=$senhaRequired?> value="<?=$senha1?>">
            </div>
           
            <div class="col-md-6">
                <label class="form-label">Senha (Novamente):</label>
                <input type="password" class="form-control shadow-none" oninput="string(this)" name="senha2"  minlength="5" maxlength="16" <?=$senhaRequired?> value="<?=$senha2?>">
            </div>

            <div class="col-md-8">
                <label class="form-label"><b>Estado:</b></label>

                <select  name="ufSigla" required class="form-control shadow-none" >
                    <option value="" <?= ($uf == '')?"selected":""?>>Selecionar estado</option>
                    <option value="AC" <?= ($uf == 'AC')?"selected":""?>>Acre</option>
                    <option value="AL" <?= ($uf == 'AL')?"selected":""?>>Alagoas</option>
                    <option value="AP" <?= ($uf == 'AP')?"selected":""?>>Amapá</option>
                    <option value="AM" <?= ($uf == 'AM')?"selected":""?>>Amazonas</option>
                    <option value="BA" <?= ($uf == 'BA')?"selected":""?>>Bahia</option>
                    <option value="CE" <?= ($uf == 'CE')?"selected":""?>>Ceará</option>
                    <option value="DF" <?= ($uf == 'DF')?"selected":""?>>Distrito Federal</option>
                    <option value="ES" <?= ($uf == 'ES')?"selected":""?>>Espírito Santo</option>
                    <option value="GO" <?= ($uf == 'GO')?"selected":""?>>Goiás</option>
                    <option value="MA" <?= ($uf == 'MA')?"selected":""?>>Maranhão</option>
                    <option value="MT" <?= ($uf == 'MT')?"selected":""?>>Mato Grosso</option>
                    <option value="MS" <?= ($uf == 'MS')?"selected":""?>>Mato Grosso do Sul</option>
                    <option value="MG" <?= ($uf == 'MG')?"selected":""?>>Minas Gerais</option>
                    <option value="PA" <?= ($uf == 'PA')?"selected":""?>>Pará</option>
                    <option value="PB" <?= ($uf == 'PB')?"selected":""?>>Paraíba</option>
                    <option value="PR" <?= ($uf == 'PR')?"selected":""?>>Paraná</option>
                    <option value="PE" <?= ($uf == 'PE')?"selected":""?>>Pernambuco</option>
                    <option value="PI" <?= ($uf == 'PI')?"selected":""?>>Piauí</option>
                    <option value="RJ" <?= ($uf == 'RJ')?"selected":""?>>Rio de Janeiro</option>
                    <option value="RN" <?= ($uf == 'RN')?"selected":""?>>Rio Grande do Norte</option>
                    <option value="RS" <?= ($uf == 'RS')?"selected":""?>>Rio Grande do Sul</option>
                    <option value="RO" <?= ($uf == 'RO')?"selected":""?>>Rondônia</option>
                    <option value="RR" <?= ($uf == 'RR')?"selected":""?>>Roraima</option>
                    <option value="SC" <?= ($uf == 'SC')?"selected":""?>>Santa Catarina</option>
                    <option value="SP" <?= ($uf == 'SP')?"selected":""?>>São Paulo</option>
                    <option value="SE" <?= ($uf == 'SE')?"selected":""?>>Sergipe</option>
                    <option value="TO" <?= ($uf == 'TO')?"selected":""?>>Tocantins</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label"><b>CEP:</b></label>
                <input type="text" class="form-control shadow-none" oninput="cepMask(this)" name="cep" maxlength="9" required value="<?=$cep?>" >
            </div>

            <div class="col-md-8">
                <label class="form-label"><b>Endereco:</b></label>
                <input type="text" class="form-control shadow-none" oninput="string(this)" name="endereco" maxlength="50" required value="<?=$endereco?>">
            </div>

      

            <div class="col-md-4">
                <label class="form-label"><b>Número:</b></label>
                <input type="text" class="form-control shadow-none" oninput="string(this)" name="numero" maxlength="10" required value="<?=$numero?>">
            </div>

            <?php
                include "telefones.php";
            ?>
    

            <div class="col-12 d-flex justify-content-center">
                <button type="submit" onclick="diseabledButton(this);" class="btn btn-success rounded-pill fw-bold px-5"><?=$nomeBotao?></button>
                <a type="button" class="btn btn-danger rounded-pill fw-bold px-5 ms-4" href="
                <?=($_SESSION['type'] == 'a')?$this->variablePath."controller/home/home.php":$this->variablePath;?>">Cancelar</a>
            </div>
    
    
        </form>
    </div>