<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="PageHeaderAdm">
    <div class="container-fluid">

        <a href="<?=$this->variablePath?>" class="fs-cs nav-link text-warning" target="_blank">
         Counter-Skins
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar">
            <span class="fas fa-bars"></span>
        </button>

        <div class="navbar-collapse collapse" id="collapseNavbar">
           
            <ul class="navbar-nav ms-auto ">

                <li class="nav-item svg-wrapper">
                    <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
                        <rect id="shape" height="40" width="100" />
                        <div id="text">
                            <a class="nav-link text-light" href="<?=$this->variablePath."controller/home/home.php"?>">
                                Home
                            </a>
                        </div>
                    </svg>
                </li>

                <li class="nav-item svg-wrapper">
                    <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
                        <rect id="shape" height="40" width="100" />
                        <div id="text">
                            <a class="nav-link text-light" href="<?=$this->variablePath."controller/compra/compra.php"?>"> 
                                Comprar
                            </a>
                        </div>
                    </svg>
                </li>

                <li class="nav-item svg-wrapper">
                    <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
                        <rect id="shape" height="40" width="100" />
                        <div id="text">
                            <a class="nav-link text-light" href="<?=$this->variablePath."controller/venda/venda.php"?>"> 
                                Vender
                            </a>
                        </div>
                    </svg>
                </li>

                <li class="nav-item svg-wrapper">
                    <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
                        <rect id="shape" height="40" width="100" />
                        <div id="text">
                            <a class="nav-link text-light" href="<?=$this->variablePath."controller/caixas/caixas.php"?>">
                                Caixas
                            </a>
                        </div>
                    </svg>
                </li>

                <li class="nav-item lh-lg d-flex ms-4 mt-1">
                    <a class="nav-link p-0 m-0" href="<?=$this->variablePath."controller/login/login.php"?>">
                        <button class="btn  btn-effect btn4 px-4 py-1" type="submit">Logar</button>
                    </a>
                    <a class="nav-link p-0 m-0 ms-2" href="<?=$this->variablePath."controller/cadastro/cadastro.php"?>">
                        <button class="btn  btn-effect btn4 px-4 py-1" type="submit">Cadastrar</button>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>