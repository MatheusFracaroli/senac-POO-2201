<?php
chdir(__DIR__);
include_once "Usuario.php";
include_once "../Interfaces/Usuario.interface.php";

class Vendedor extends Usuario implements IUsuario {

    public function acao(array $idProduto):bool {
        echo "Fez uma ação";

        return true;
    }
}