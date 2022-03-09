<?php
include "InterfaceCrud.php";

class Produto implements InterfaceCrud {
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $idCategoria;

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
}