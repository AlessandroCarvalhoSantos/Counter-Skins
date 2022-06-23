<div class="container-fluid full-height img-login">
        
    <div class="row  justify-content-center p-0 full-height">

        <div class="col-12 col-md-4 align-self-center bg-login h-50 p-5 mt-4">
            <h1 class="text-center  text-warning fs-cs display-5">Login</h1>
            <p class="text-center lead text-warning fs-cs">Bem vindo ao Counter-Skins</p>
            <?php
                $labelCpf = "";
                $span = "";
                $labelSenha = "";
                $cpf = "";
                $senha = "";

                if (isset($_SESSION["error"])) {
                    if (isset($_SESSION["error"]["CPF"])) {
                        $labelCpf  = ' border border-danger';
                        $span = '<div class="bg-danger w-100 text-center text-light p-2">' . $_SESSION["error"]["CPF"] . '</div>';
                    }

                    if (isset($_SESSION["error"]["SENHA"])) {
                        $labelSenha = ' border border-danger';
                        $span = '<div class="bg-danger w-100 text-center text-light p-2">' . $_SESSION["error"]["SENHA"] . '</div>';
                    }
                    unset($_SESSION['error']);
                }

                if (isset($_SESSION['SENHA'])) {
                    $senha = 'value="' . $_SESSION['SENHA'] . '"';
                }

                if (isset($_SESSION['CPF'])) {
                    $cpf = 'value="' . $_SESSION['CPF'] . '"';
                }
            ?>
        
            <form method="post" action="<?=$this->variablePath."controller/login/verificacao.php"?>">


                <div class="my-2 bg-gray d-flex p-1 <?php echo $labelCpf ?>" >
                    
                    <label class="text-secondary">
                        <i class="fas fa-user m-2"></i>CPF&nbsp;
                    </label>

                    <input name="CPF" type="text" class="border-0 out-none bg-gray flex-grow-1" oninput="cpfMask(this)" <?php echo $cpf ?> required>
                </div>

                <div class="my-2 bg-gray d-flex p-1 <?php echo $labelSenha ?>" >
                
                    <label class="text-secondary">
                        <i class="fas fa-lock m-2" ></i>Senha&nbsp;
                    </label>
                    <input type="password" name="SENHA" class="border-0 out-none  bg-gray flex-grow-1" oninput="string(this)" <?php echo $senha ?> required >
                    <i id="S1" class="fas fa-eye-slash _icon-modify _not-vision-password p-2 m-0" onclick="showPassword('SENHA','S1','S2')" ></i>
                    <i id="S2" class="fas fa-eye _icon-modify _vision-password p-2 m-0" onclick="showPassword('SENHA','S1','S2')"></i>

                </div>


                <?php
                    echo $span;
                    unset($_SESSION['CPF']);
                    unset($_SESSION['SENHA']);
                ?>
            
        
                <div class="row justify-content-center">
                    <a  href="<?=$this->variablePath."controller/login/esqueceuSenha.php"?>" class="text-center fs-cs lead text-decoration-none pt-2 text-light w-100">Esqueceu sua senha?</a>
                </div>

                <br>


                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-outline-warning col-4 m-1">Login</button>
                    <a href="<?=$this->variablePath."controller/steam/steam.php"?>" class="btn btn-outline-light col-4 m-1">Steam</a>
                </div>
            </form>
        </div>
    </div>
</div>