<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="PageHeaderAdm">
    <div class="container-fluid">

        <a href="<?=$this->variablePath?>" class="fs-cs nav-link text-warning" target="_blank">
         <!-- <img class="navbar-brand" src="<?=$this->variablePath."assets/img/webdecLogoNomeBranco.png"?>" style="width:100px;"> -->
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

                <li class="nav-item svg-wrapper">
                    <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
                        <rect id="shape" height="40" width="100" />
                        <div id="text">
                            <a class="nav-link text-light" href="<?=$this->variablePath."controller/carteira/carteira.php"?>">
                                <i class="fas fa-wallet"></i> R$<?=$_SESSION['saldo'] ?>
                            </a>
                        </div>
                    </svg>
                </li>

                <li class="nav-item svg-wrapper dropdown me-5 ">
                    <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
                        <rect id="shape" height="40" width="100" />
                        <div id="text">
                            
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Opções
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?=$this->variablePath."controller/conta/conta.php"?>">Conta</a></li>
                                <li><a class="dropdown-item" href="<?=$this->variablePath."controller/carteira/carteira.php"?>">Carteira</a></li>
                                <li><a class="dropdown-item" href="<?=$this->variablePath."controller/inventario/inventario.php"?>">Inventário</a></li>
                                <li><a class="dropdown-item" href="<?=$this->variablePath."controller/login/login.php"?>">Sair</a></li>
                            </ul>
                        </div>
                    </svg>
                </li>

            </ul>
        </div>

    </div>
</nav>