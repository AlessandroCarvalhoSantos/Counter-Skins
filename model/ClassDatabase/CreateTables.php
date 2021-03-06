<?php

namespace Model\ClassDatabase;

use Model\ClassDatabase\ConnectionMySql;
use Model\ClassEncryptDecrypt\EncryptDecrypt;
use PDO;


class CreateTables{

    private $connection=null;
     

    public function verifyTables(){

        $this->connection = new ConnectionMySql();
        $this->connection->executeConnection();
     
        $dados =  $this->connection->execute("SHOW TABLES;")->fetchAll(PDO::FETCH_COLUMN);

        if(!in_array("usuarios", $dados)){
            $this->createTableUsuarios(); 
            $this->insertUsuarios(); 
        }

        if(!in_array("itens", $dados)){
            $this->createTableItens(); 
            $this->insertItens(); 
        }

        if(!in_array("inventario", $dados)){
            $this->createTableInventario(); 
            $this->insertInventario(); 
        }

    }

  
    private function insertUsuarios(){

        $encrypt = new EncryptDecrypt();
        $password = $encrypt->encrypt("123456");

        $dados = array(
            "nome_usuario"=> "Alessandro",
            "sobrenome_usuario"=> "Carvalho Santos",
            "cpf_usuario"=>"13142985778",
            "senha_usuario" => "$password",
            "saldo_usuario" => 25,
            "email_usuario" => "santoscarvalhoalessandro@gmail.com",
            "celular_usuario" => "28999762587",
            "link_steam_usuario" => "https://steamcommunity.com/tradeoffer/new/?partner=1077846459&token=6K-MXVNX",
            "tipo_usuario" => "U"
        );

        $this->connection->setTable('usuarios');
        $id=$this->connection->insert($dados);

        $dados = array(
            "nome_usuario"=> "Eduardo",
            "sobrenome_usuario"=> "Vasconcellos Motta",
            "cpf_usuario"=>"14527325744",
            "senha_usuario" => "$password",
            "saldo_usuario" => 100,
            "email_usuario" => "dudumottavasconcelos@gmail.com",
            "celular_usuario" => "28999145918",
            "link_steam_usuario" => "https://steamcommunity.com/tradeoffer/new/?partner=1077846459&token=6K-MXVNX",
            "tipo_usuario" => "U"
        );

        $id=$this->connection->insert($dados);

        $this->id = $id;
    }

    private function insertInventario(){

        $this->connection->setTable('inventario');

        $dados = array(
            "id_item"=> 1,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 2,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 3,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 4,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 5,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 6,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 7,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 8,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 9,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 10,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 11,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 12,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 13,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 14,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);

        $dados = array(
            "id_item"=> 15,
            "id_usuario"=> 1,
            "status_item"=>"T",
            "status_negociacao" => "A",
            "preco_compra" => 0.01,
            "preco_venda" => 0.01
        );
        $this->connection->insert($dados);
    }

    private function insertItens(){

        $this->connection->setTable('itens');

        $dados = array(
            "nome_item"=> "AK-47 | Gold Arabesque",
            "nome_colecao"=> "Souvenir AK-47",
            "descricao_item"=>"O corpo do rifle foi revestido com tinta dourada. A revista apresenta um ornamento floral gravado. O protetor de m??o e a coronha s??o feitos de madeira e decorados com esculturas tradicionais ??rabes.",
            "tipo_item" => "AK-47",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.06328179,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\ak-47\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "AWP | Lightning Strike",
            "nome_colecao"=> "AWP",
            "descricao_item"=>"O corpo do rifle ?? revestido com tinta met??lica roxa e adornado com uma imagem realista de um rel??mpago. Ocano, a luneta e a parte de tr??s da coronha n??o s??o pintados.",
            "tipo_item" => "AWP",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.02265622,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\awp\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "M4A1-S | Golden Coil",
            "nome_colecao"=> "The Shadow Collection",
            "descricao_item"=>"O corpo do rifle foi revestido com tinta dourada. A revista apresenta um ornamento floral gravado. O protetor de m??o e a coronha s??o feitos de madeira e decorados com esculturas tradicionais ??rabes.",
            "tipo_item" => "M4A1-S",
            "tipo_desgaste" => "Minimal Wear",
            "desgaste_item" => 0.08840039,
            "estoque" => "N",
            "imagem_item" => "assets\img\itensCS\armas\M4A1-S\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "USP-S | Kill Confirmed",
            "nome_colecao"=> "The Shadow Collection",
            "descricao_item"=>"O corpo da pistola ?? pintado de bord?? e adornado com a imagem de um cr??nio cinza estilha??ado por uma bala. A bala voadora deixando um rastro de fogo ?? pintada no slide e no silenciador. O design ?? complementado por imagens de respingos de sangue e fragmentos ??sseos.",
            "tipo_item" => "USP-S",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.06995636,
            "estoque" => "N",
            "imagem_item" => "assets\img\itensCS\armas\USP-S\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "Glock-18 | Fade",
            "nome_colecao"=> "The Assault Collection",
            "descricao_item"=>"O slide ?? cromado e revestido com tintas transl??cidas criando um gradiente. O padr??o ?? feito em v??rios tons de roxo, rosa e amarelo. O resto da pistola n??o ?? pintado. O esquema de cores do gradiente depende do ??ndice do padr??o.",
            "tipo_item" => "Glock-18",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.01092004,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\Glock-18\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "Karambit | Lore",
            "nome_colecao"=> "Karambit",
            "descricao_item"=>"O design da skin ?? inspirado no lend??rio AWP | Drag??o Lore. A l??mina da faca ?? revestida com tinta met??lica dourada e adornada com um padr??o medieval transl??cido. A aresta de corte inferior ?? decorada com um ornamento celta feito em tons amarelo-alaranjado com contorno marrom escuro. A al??a ?? pintada de verde escuro.",
            "tipo_item" => "Karambit",
            "tipo_desgaste" => "Battle-Scarred",
            "desgaste_item" => 0.57779365,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\knives\Karambit\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "Butterfly Knife | Doppler Sapphire",
            "nome_colecao"=> "Butterfly Knife",
            "descricao_item"=>"A l??mina da faca ?? pintada com tintas met??licas e adornada com um padr??o de linhas onduladas transl??cidas que lembram fuma??a. O esquema de cores da pele inclui v??rios tons de azul criando transi????es de gradiente. O design da pele lembra a textura da safira. A al??a n??o ?? pintada e complementada com inser????es em azul escuro.",
            "tipo_item" => "Butterfly Knife",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.00932433,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\knives\Butterfly-Knife\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "Specialist Gloves | Crimson Kimono",
            "nome_colecao"=> "Specialist Gloves",
            "descricao_item"=>"A parte superior das luvas ?? feita de tecido preto e adornada com um padr??o geom??trico vermelho. O design ?? complementado com inser????es emborrachadas pretas e vermelhas. O lado da palma ?? feito de couro cinza escuro e refor??ado com inser????es pretas.",
            "tipo_item" => "Specialist Gloves",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.06920338,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\luvas\Specialist-Gloves\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "Sport Gloves | Pandora's Box",
            "nome_colecao"=> "Sport Gloves",
            "descricao_item"=>"A parte superior das luvas ?? feita de tecidos de malha preta e roxa e complementada com inser????es pretas. O lado da palma ?? adornado com um padr??o abstrato azul-p??rpura e refor??ado com inser????es pretas.",
            "tipo_item" => "Sport Gloves",
            "tipo_desgaste" => "Field-Tested",
            "desgaste_item" => 0.21971058,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\luvas\Sport-Gloves\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "P90 | Asiimov",
            "nome_colecao"=> "The Breakout Collection",
            "descricao_item"=>"O design da pele ?? feito em estilo futurista. O corpo da metralhadora ?? pintado de branco e adornado com um ornamento geom??trico de listras diagonais pretas e laranja. O design ?? complementado por elementos gr??ficos em forma de cruzes e formas geom??tricas localizadas em v??rias partes do corpo.",
            "tipo_item" => "P90",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.01694127,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\P90\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "Desert Eagle | Blaze",
            "nome_colecao"=> "The Dust Collection",
            "descricao_item"=>"O corpo da pistola ?? pintado de preto s??lido. A parte frontal do slide ?? adornada com imagens de chamas feitas em amarelo e laranja.",
            "tipo_item" => "Desert Eagle",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.02757455,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\Desert-Eagle\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "Desert Eagle | Conspiracy",
            "nome_colecao"=> "The Breakout Collection",
            "descricao_item"=>"O corpo da pistola ?? pintado de preto s??lido. O design do slide ?? complementado por acentos na forma de finas listras amarelas. A al??a ?? decorada com uma inser????o texturizada preta com um logotipo amarelo redondo.",
            "tipo_item" => "Desert Eagle",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.05637090,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\Desert-Eagle\A202201\A2.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "M4A4 | Howl",
            "nome_colecao"=> "The Huntsman Collection",
            "descricao_item"=>"O design da pele ?? feito em um esquema de cores vermelho e preto. A parte central do rifle ?? adornada com a imagem da cabe??a de um lobo com a boca bem aberta. A imagem ?? pintada usando um gradiente laranja-branco. O resto da arma ?? adornado com um padr??o flamejante vermelho. A al??a ?? pintada de vermelho s??lido.",
            "tipo_item" => "M4A4",
            "tipo_desgaste" => "Well-Worn",
            "desgaste_item" => 0.38539847,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\M4A4\A202201\A1.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "M4A4 | Poseidon",
            "nome_colecao"=> "The Gods and Monsters Collection",
            "descricao_item"=>"O corpo do rifle ?? revestido com tinta azul-petr??leo e adornado com uma imagem de uma batalha entre Poseidon e dois monstros marinhos. Poseidon segura um tridente dourado e ?? pintado em v??rios tons de azul-petr??leo claro. Os monstros s??o pintados de verde acinzentado. O protetor de m??o ?? adornado com a imagem de uma lan??a cercada por bolhas de ar.",
            "tipo_item" => "M4A4",
            "tipo_desgaste" => "Field-Tested",
            "desgaste_item" => 0.28366786,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\M4A4\A202201\A2.png"
        );
        $this->connection->insert($dados);

        $dados = array(
            "nome_item"=> "P250 | Whiteout",
            "nome_colecao"=> "The Chop Shop Collection",
            "descricao_item"=>"Todo o corpo da pistola ?? pintado de branco s??lido. Pequenas pe??as individuais da arma n??o s??o pintadas.",
            "tipo_item" => "P250",
            "tipo_desgaste" => "Factory New",
            "desgaste_item" => 0.06994196,
            "estoque" => "S",
            "imagem_item" => "assets\img\itensCS\armas\P250\A202201\A1.png"
        );
        $this->connection->insert($dados);
    
    }

    private function createTableUsuarios(){
        $this->connection->execute("CREATE TABLE `counterskins`.`usuarios` 
        (`id_usuario` INT NOT NULL AUTO_INCREMENT UNIQUE , 
        `nome_usuario` VARCHAR(50) NOT NULL , 
        `sobrenome_usuario` VARCHAR(100) NOT NULL,
        `cpf_usuario` VARCHAR(11) NOT NULL UNIQUE,
        `email_usuario` VARCHAR(70) NOT NULL UNIQUE,
        `senha_usuario` VARCHAR(255) NOT NULL,
        `celular_usuario` VARCHAR(12) NOT NULL,
        `saldo_usuario` FLOAT(20,2) NOT NULL,
        `link_steam_usuario` VARCHAR(255) NOT NULL,
        `tipo_usuario` CHAR(1) NOT NULL,
        PRIMARY KEY (`id_usuario`)
        ) ENGINE = InnoDB;");
    }
    
    private function createTableItens(){
        $this->connection->execute("CREATE TABLE `counterskins`.`itens` 
        (`id_item` INT NOT NULL AUTO_INCREMENT UNIQUE , 
        `nome_item` VARCHAR(70) NOT NULL , 
        `nome_colecao` VARCHAR(80) NOT NULL,
        `descricao_item` VARCHAR(800) NOT NULL,
        `tipo_item` VARCHAR(30) NOT NULL,
        `tipo_desgaste` VARCHAR(30) NOT NULL,
        `desgaste_item` FLOAT(15,12) NOT NULL,
        `imagem_item` VARCHAR(100) NOT NULL,
        `estoque` CHAR(1) NOT NULL,
        PRIMARY KEY (`id_item`)
        ) ENGINE = InnoDB;");
    }

    private function createTableInventario(){
        $this->connection->execute("CREATE TABLE `counterskins`.`inventario` 
        (
            `id_inventario` INT NOT NULL AUTO_INCREMENT UNIQUE,
            `id_item` INT NOT NULL,
            `id_usuario` INT NOT NULL,
            `status_item` CHAR(1) NOT NULL, -- |c = comprado (item comprado do site),  t - transferido (item veio de transferecia da conta steam), r - retirado(item foi transferido para conta steam), v - vendido(item foi vendido para outro usuario)| 
            `status_negociacao` CHAR(1) NOT NULL, -- |a - anunciado, e = estoque| 
            `preco_compra` FLOAT(20,2),
            `preco_venda` FLOAT(20,2),
            PRIMARY KEY (`id_inventario`),
            FOREIGN KEY (`id_item`) REFERENCES itens(`id_item`),
            FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`)
        ) ENGINE = InnoDB;");
    }
}