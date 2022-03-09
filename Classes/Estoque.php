<?php
chdir(__DIR__);
include "../Interfaces/InterfaceCrud.php";

class Estoque implements InterfaceCrud {
    private $idProduto;
    private $quantidade;
    private $id;
    private $local;
    private $limiteMinimo;

    function criar(array $dados):bool {
        echo "Criado";
    }

    function apagar(int $id):bool {
        echo "Apagado";
    }

    function editar(int $id, array $dados):bool {
        echo "Editado";
    }

    function listar(int $id = null):array {
        echo "Listado";
    }
    
    function avisoLimiteMin() {
        echo "Limite mínimo";
    }
}