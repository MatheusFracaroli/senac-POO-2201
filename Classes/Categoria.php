<?php
include "InterfaceCrud.php";

class Categoria implements InterfaceCrud {
    private $id;
    private $nome;

    function criar(array $dados):bool {
        echo "Criado";
    }

    function apagar(int $id):bool {
        echo "Apagado";
    }

    function editar(int $id, array $dados):bool {
        echo "Editado";
    }

    function listar(int $id = null):bool {
        echo "Listado";
    }

    function avisoLimiteMin() {
        echo "Limite mínimo";
    }
}