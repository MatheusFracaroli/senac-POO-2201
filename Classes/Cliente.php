<?php
chdir(__DIR__);
include "../Interfaces/Usuario.interface.php";

class Cliente implements Usuario {
    public function acao(array $idProduto):bool {
        echo "Fez uma ação";
    }
}