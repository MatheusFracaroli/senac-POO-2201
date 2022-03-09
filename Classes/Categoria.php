<?php
chdir(__DIR__);
include "../Interfaces/InterfaceCrud.php";

class Categoria implements InterfaceCrud {
    private $id;
    private $nome;

    function criar(array $dados):bool {
        echo "Criado";

        return true;
    }

    function apagar(int $id):bool {
        echo "Apagado";

        return true;
    }

    function editar(int $id, array $dados):bool {
        echo "Editado";

        return true;
    }

    function listar(int $id = null):array {
        echo "Listado";

        return [];
    }

    function avisoLimiteMin() {
        echo "Limite mínimo";
    }
}