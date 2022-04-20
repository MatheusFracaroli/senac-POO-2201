<?php 
require __DIR__ . '/Model.class.php';

abstract class Investimentos extends Model {
    public function __construct()
    {
        parent::__construct;
    }

    function inserir(array $dados):?int {
        return null;
    }

    function atualizar(int $id, array $dados):bool {
        return true;
    }

    function apagar(int $id):bool {
        return true;
    } 

    function listar(int $id = null):?array {
        return null;
    }
}